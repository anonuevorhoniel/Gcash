<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gcash extends Model
{
    use HasFactory;

    protected $table = 'gcash'; //WAG TO KAKALIMUTAN
    protected $fillable = ['amount', 'number', 'reference'];

    public static function deleteById($id)
    {
        // hanapin id ng current record
        $gcashRecord = Gcash::find($id);
        
        if ($gcashRecord) {
            $gcashRecord->delete();
            return true; //gagawing true ang gcashRecord
        }

        return false; // pag error
    }
    
}