<?php

namespace App\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller{
    private $user;

    function __construct(){
        $this->user = new UserService();
    }

    public function getByID($id){
        return response()->json($this->user->getByID($id), 200);
    }

    public function showAll(){
        return response()->json($this->user->showAll(), 200);
    }

    public function save(Request $request){
        return response()->json($this->user->save($request), 200);
    }

    public function update($id, Request $request){
        return response()->json($this->user->update($id,$request), 200);
    }

    public function delete($id){
        return response()->json($this->user->delete($id), 200);
    }
}
