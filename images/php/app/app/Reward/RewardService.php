<?php
namespace App\Reward;

class RewardService extends RewardRepository{
    public function __construct(){
        $this->setSource(new RewardEloquentSource());
    }
}
