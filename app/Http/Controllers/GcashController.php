<?php

namespace App\Http\Controllers;
use App\Models\Gcash;
use Illuminate\Http\Request;

class GcashController extends Controller
{
    public static function edit(Request $req)
    {
        $valid = $req->validate(
            [
                'amount' => 'required',
                'number' => 'required',
                'reference' => 'required',
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
            ]
            );
            $inserted = Gcash::create($valid);
            return redirect(route('gcash.creates'));
    }
    public function delete($id) {
        return redirect(route('index'));
    }

    public function update(Request $request, $id)
{
    $record = Gcash::find($id);
    $record->fill($request->only('amount', 'number', 'reference'))->save();
    // Other code...

}
}
