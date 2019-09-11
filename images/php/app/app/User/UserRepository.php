<?php
namespace App\User;
class UserRepository{
    private $source;

    public function setSource(IUserSource $source){
        $this->source = $source;
    }

    public function getByID($id){
        return $this->source->getByID($id);
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
