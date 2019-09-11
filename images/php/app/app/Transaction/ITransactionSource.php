<?php

namespace App\Transaction;
use Illuminate\Http\Request;

interface ITransactionSource{
    public function showAll();
    public function save(Request $request);
    public function update($id, Request $request);
    public function delete($id);
}
