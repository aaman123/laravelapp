<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');

Route::get('orders', 'OrdercController@index')->name('order');   

Route::post('orders', 'OrdercController@store');

Route::post('coinbase', 'coinbase_controller@store');


//for purchase and profile management
Route::get('/purchases', 'PurchasesController@index')-> name('purchases') ;

// //for user management 


//for authorization middleware
Route::group(['middleware' => 'auth'], function () {
	Route::resource('users', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});
