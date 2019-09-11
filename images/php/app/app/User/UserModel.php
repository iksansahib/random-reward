<?php

namespace App\User;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model{
    protected $fillable = [
        'name', 'reward_range_from', 'reward_range_to'
    ];

    protected $table = 'users';
}
