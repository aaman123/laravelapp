<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//Make Login & LogOut API
//Make Slots Machine API
// 1. Get Rollled Results
// 2. Set Bets Status
Route::get('/getRandomCombinations','CombinationsController@handle');
Route::post('/coinbase_webhook','CoinbasePaymentsController@handle');

Route::get('orders', 'OrderController@index');

Route::post('orders', 'OrderController@store');

Route::post('coinbase', 'coinbase_controller@store');

Route::post('login', 'API\UserController@login');

Route::post('register', 'API\UserController@register');

Route::group(
	['middleware' => 'auth:api'], function()
	{
Route::post('details', 'API\UserController@details');
	}
);
