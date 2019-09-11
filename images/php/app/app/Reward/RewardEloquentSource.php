<?php

namespace App\Reward;

use Illuminate\Http\Request;
use App\Reward\RewardModel;

class RewardEloquentSource implements IRewardSource{
    public function getToday(){
        return RewardModel::where('reward_date',date("Y-m-d"))->where('reward','<>',0)->first();
    }

    public function getByID($id){
        return RewardModel::find($id);
    }

    public function showAll(){
        return RewardModel::all();
    }

    public function save(Request $request){
        $reward = RewardModel::create($request->all());
        return $reward;
    }

    public function update($id, Request $request){
        $reward = RewardModel::findOrFail($id);
        $reward->update($request->all());
        return $reward;
    }

    public function delete($id){
        $reward = RewardModel::findOrFail($id);
        $reward->delete();
        return $reward;
    }
}
;
