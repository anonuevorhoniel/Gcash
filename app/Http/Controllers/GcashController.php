<?php

namespace App\Http\Controllers;
use App\Models\Gcash;
use Illuminate\Http\Request;
use Carbon\Carbon;

class GcashController extends Controller
{
    public static function edit(Request $req)
    {
        $valid = $req->validate(
            [
                'amount' => 'required',
                'number' => 'required',
                'reference' => 'required',
                'claimed' => 'required',
                'interest' => 'required'
            ]
            );
            return redirect('index');
    }
    public function create(Request $req)
    {
        $valid = $req->validate(
            [
                'amount' => 'required',
                'number' => 'required',
                'reference' => 'required',
                'claimed' => 'required',
                'interest' => 'required'
            ]
            );
            $inserted = Gcash::create($valid);
            return redirect(route('gcash.creates'));
    }
    public function delete($id) {
        return redirect(route('index'));
    }
    public function deletecl($id) {
        return redirect(route('gcash.unclaimed'));
    }

    public function update(Request $request, $id)
{
    $record = Gcash::find($id);
    $record->amount = $request->input('amount');
    $record->number = $request->input('number');
    $record->reference = $request->input('reference');
    $record->claimed = $request->input('claimed');
    $record->interest = $request->input('interest');
    $record->update();
    return redirect(route('index'));
    // Other code...

}

public function unclaimed()
{
    $totals = Gcash::all()->sum('interest');
    $gcash = Gcash::all()->where('claimed', 'LIKE', 'No');
    return view('unclaimed', ['gcash' => $gcash, 'total' => $totals]);
}
public function updatecl(Request $request, $id)
{
    $record = Gcash::find($id);
    $record->amount = $request->input('amount');
    $record->number = $request->input('number');
    $record->reference = $request->input('reference');
    $record->claimed = $request->input('claimed');
    $record->interest = $request->input('interest');
    $record->update();
    return redirect(route('gcash.unclaimed'));
    // Other code...

}
public function search(Request $req)
{
   $val = $req->validate([
        'search' => 'required'
    ]);
    $tot = Gcash::where('reference', 'like', '%' . $val['search'] . '%')->get();
    return view('search', ['gcash' => $tot]);
}
}
