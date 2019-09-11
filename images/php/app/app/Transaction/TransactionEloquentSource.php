<?php

namespace App\Transaction;

use Illuminate\Http\Request;
use App\Transaction\TransactionModel;

class TransactionEloquentSource implements ITransactionSource{
    public function showAll(){
        return TransactionModel::all();
    }

    public function save($request){
        $transaction = TransactionModel::create($request);
        return $transaction;
    }

    public function update($id, Request $request){
        $transaction = TransactionModel::findOrFail($id);
        $transaction->update($request->all());
        return $transaction;
    }

    public function delete($id){
        $transaction = TransactionModel::findOrFail($id);
        $transaction->delete();
        return $transaction;
    }
}
