<?php

namespace App\User;

use Illuminate\Http\Request;
use App\User\UserModel;

class UserEloquentSource implements IUserSource{
    public function getByID($id){
        return UserModel::find($id);
    }

    public function showAll(){
        return UserModel::all();
    }

    public function save(Request $request){
        $user = UserModel::create($request->all());
        return $user;
    }

    public function update($id, Request $request){
        $user = UserModel::findOrFail($id);
        $user->update($request->all());
        return $user;
    }

    public function delete($id){
        $user = UserModel::findOrFail($id);
        $user->delete();
        return $user;
    }
}
;
