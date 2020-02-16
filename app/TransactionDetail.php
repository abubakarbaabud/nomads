<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Transaction;

class TransactionDetail extends Model
{
    use SoftDeletes;


    protected $guarded = [
//        'transactions_id', 'username', 'nationality', 'is_visa', 'doe_passport'
    ];

    protected $hidden=[

    ];

    public function transaction(){
        return $this->belongsTo(Transaction::class,'transactions_id','id');
    }
}
