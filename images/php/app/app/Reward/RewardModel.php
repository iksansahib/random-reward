<?php

namespace App\Reward;

use Illuminate\Database\Eloquent\Model;

class RewardModel extends Model{
    protected $fillable = [
        'reward', 'reward_date'
    ];

    protected $table = 'rewards';
}
