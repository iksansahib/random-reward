<?php
namespace App\Transaction;
class TransactionRepository{
    private $source;

    public function setSource(ITransactionSource $source){
        $this->source = $source;
    }

    public function showAll(){
        return $this->source->showAll();
    }

    public function save($request){
        return $this->source->save($request);
    }

    public function update($id, $request){
        return $this->source->update($id,$request);
    }

    public function delete($id){
        return $this->source->delete($id);
    }
}
