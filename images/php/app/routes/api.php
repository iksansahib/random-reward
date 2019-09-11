<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
use Illuminate\Http\Request;
$router->group([
    'namespace'=>'App\User'
], function($router){
    $router->get('/users/{id}', ['uses' => 'UserController@getByID']);
    $router->get('/users', ['uses' => 'UserController@showAll']);
    $router->post('/users', ['uses' => 'UserController@save']);
    $router->put('/users/{id}',['uses' => 'UserController@update']);
    $router->delete('/users/{id}',['uses' => 'UserController@delete']);
});

$router->group([
    'namespace'=>'App\Reward'
], function($router){
    $router->get('/rewards/{id}', ['uses' => 'RewardController@getByID']);
    $router->get('/rewards', ['uses' => 'RewardController@showAll']);
    $router->post('/rewards', ['uses' => 'RewardController@save']);
    $router->put('/rewards/{id}',['uses' => 'RewardController@update']);
    $router->delete('/rewards/{id}',['uses' => 'RewardController@delete']);
});

$router->group([
    'namespace'=>'App\Transaction'
], function($router){
    $router->post('/give-reward',['uses' => 'TransactionController@giveReward']);
    $router->get('/transactions',['uses' => 'TransactionController@showAll']);
});
