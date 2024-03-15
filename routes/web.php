<?php
use App\Models\Gcash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GcashController;
use Carbon\Carbon;


Route::get('/', function() {
    $todayDates = Gcash::orderBy('created_at', 'desc')->whereDate('created_at', \Carbon\Carbon::today())->paginate(5);
    $totals = Gcash::whereDate('created_at', \Carbon\Carbon::today())->sum('interest');
    return view('index', ['gcash' => $todayDates, 'totals' => $totals]);
})->name('index');
Route::get('/all', function()
{
return view('all', [
'gcash' => Gcash::orderBy('created_at', 'desc')->paginate(5)
]);
});

Route::get('/gcash/edit/{id}', function($id)
{
     return view('edit', 
     [
        'table' => Gcash::find($id)
     ]);
})->name('gcash.edit');;
Route::any('/update/{id}', [GcashController::class, 'update'])->name('gcash.creates');
Route::post('/gcash/create', [GcashController::class, 'create'])->name('gcash.create');//eto na lalagay
Route::get('/gcash/creates', function()
{
    return view('create') ;
})->name('gcash.creates');
Route::get('/gcash/delete/{id}', function($id) {
    if (Gcash::deleteById($id)) {
        // ni-return true galing sa gcash model
        return redirect()->route('index')->with('success', 'Record deleted successfully');
    } else {
        return redirect()->route('index')->with('error', 'Record not found');
    }
});
Route::get('/gcash/unclaimed', [GcashController::class, 'unclaimed'])->name('gcash.unclaimed');
Route::get('/gcash/unclaimed/edit/{id}', function($id)
{
     return view('editcl', 
     [
        'table' => Gcash::find($id)
     ]);
    });
    Route::any('/update/unclaimed/{id}', [GcashController::class, 'updatecl'])->name('gcash.createscl');
Route::get('/gcash/unclaimed/delete/{id}', function($id) {
    if (Gcash::deleteById($id)) {
        // ni-return true galing sa gcash model pero unclaimed
        return redirect()->route('gcash.unclaimed')->with('success', 'Record deleted successfully');
    } else {
        return redirect()->route('gcash.unclaimed')->with('error', 'Record not found');
    }
});   
Route::any('/gcash/search', [GcashController::class, 'search']);
