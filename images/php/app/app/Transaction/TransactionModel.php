<?php

namespace App\Transaction;

use Illuminate\Database\Eloquent\Model;

class TransactionModel extends Model{
    protected $fillable = [
        'transaction_date', 'user_id', 'reward'
    ];

    protected $table = 'transactions';
}
