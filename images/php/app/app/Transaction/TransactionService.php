<?php
namespace App\Transaction;

class TransactionService extends TransactionRepository{
    public function __construct(){
        $this->setSource(new TransactionEloquentSource());
    }
}
