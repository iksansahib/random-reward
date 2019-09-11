<?php

namespace App\Transaction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User\UserService;
use App\Reward\RewardService;

class TransactionController extends Controller{

    public function showAll(){
        $transaction = new TransactionService();
        return response()->json($transaction->showAll(), 200);
    }

    /*  Function that will give reward to user, reward will be given random by range per user
    *   Reward will be rounded to next 5000
    *   Reward will be available until its reached the limit per day
    */
    public function giveReward(){

        $reward = new RewardService();
        $reward_today = $reward->getToday();

        // return immediately if reward not exist

        if(!$reward_today){
            return response()->json(array("message"=>"Reward Habis"), 200);
        }

        $reward_limit = $reward_today->reward;
        $reward_id = $reward_today->id;


        $transaction = new TransactionService();

        $user_service = new UserService();
        $users = $user_service->showAll();

        $reward_users = [];
        foreach($users as $user){
            if($reward_limit <= 0){
                break;
            }

            // get random reward per user then round it to next 5000
            $reward_for_user = rand($user->reward_range_from, $user->reward_range_to);
            $reward_round_to_five = round($reward_for_user/5000) * 5000;

            // if random reward more than available limit, use available limit as reward
            $reward_check_to_limit = $reward_round_to_five <= $reward_limit
                ? $reward_round_to_five
                : $reward_limit;

            $data["user_id"] = $user->id;
            $data["reward"] = $reward_check_to_limit;
            $data["transaction_date"] = date("Y-m-d H:i:s");
            $transaction->save($data);

            // deduct reward limit
            $reward_limit = $reward_limit - $reward_check_to_limit;

            // populate request so it can be send to reward service
            $request_reward = new Request();
            $request_reward->setMethod('POST');
            $request_reward->request->add(['reward' => $reward_limit]);

            $reward->update($reward_id, $request_reward);

            $reward_users[] = (object)[
                'name' => $user->name,
                'reward' => $reward_check_to_limit
            ];
        }

        return response()->json($reward_users, 200);
    }
}
