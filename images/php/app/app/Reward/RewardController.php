<?php

namespace App\Reward;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RewardController extends Controller{
    private $reward;

    function __construct(){
        $this->reward = new RewardService();
    }

    public function getByID($id){
        return response()->json($this->reward->getByID($id), 200);
    }

    public function showAll(){
        return response()->json($this->reward->showAll(), 200);
    }

    public function save(Request $request){
        return response()->json($this->reward->save($request), 200);
    }

    public function update($id, Request $request){
        return response()->json($this->reward->update($id,$request), 200);
    }

    public function delete($id){
        return response()->json($this->reward->delete($id), 200);
    }
}
