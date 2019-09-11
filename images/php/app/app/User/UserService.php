<?php
namespace App\User;

class UserService extends UserRepository{
    public function __construct(){
        $this->setSource(new UserEloquentSource());
    }
}
