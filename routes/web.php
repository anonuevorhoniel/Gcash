<?php
use App\Models\Gcash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GcashController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function()
{
    return view('index', [
        'heading' => 'Latest Gcash',
        'gcash' => Gcash::all()
    ]);
})->name('index');

Route::get('/gcash/edit/{id}', function($id)
{
     return view('edit', 
     [
        'table' => Gcash::find($id)
     ]);
})->name('gcash.edit');;
Route::post('/gcash/edits', [GcashController::class, 'update'])->name('gcash.creates');
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