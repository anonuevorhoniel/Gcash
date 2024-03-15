<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gcash extends Model
{
    use HasFactory;

    protected $table = 'gcash'; //WAG TO KAKALIMUTAN
    protected $fillable = ['amount', 'number', 'reference', 'claimed', 'interest'];//data

    public static function deleteById($id)//passed paramter galing sa url
    {
        // hanapin id ng current record
        $gcashRecord = Gcash::find($id);//check kung may same id sa table
        
        if ($gcashRecord) {
            $gcashRecord->delete();//nasa model 
            return true; //gagawing true ang gcashRecord
        }

        return false; // pag error
    }
    
}