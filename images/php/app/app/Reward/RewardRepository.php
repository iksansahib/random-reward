<?php
namespace App\Reward;
class RewardRepository{
    private $source;

    public function setSource(IRewardSource $source){
        $this->source = $source;
    }

    public function getToday(){
        return $this->source->getToday();
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
