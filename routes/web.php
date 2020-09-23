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

Route::match(['get','post'],'/login','Admin\LoginController@login')->name('admin-login');
Route::get('/logout','Admin\LoginController@logout')->name('admin-logout');

Route::group([
	'middleware' => 'auth.admin'
],function(){

	Route::get('/','Admin\AccountController@list')->name('accounts-list');
	Route::get('/coin','Admin\CoinController@list')->name('coins-list');
	Route::get('/coin/add','Admin\CoinController@add')->name('coins-add');

	Route::match(['get','post'],'/coin/transaction/{id}','Admin\CoinController@transaction')->name('coins-transaction');

	// ajax

	Route::get('/getMarket','APIs\ApiController@getMarket')->name('get-market');

	Route::post('/addCoinSell','Admin\CoinController@addCoinSell');


});

Route::get('/auth/google', 'Auth\LoginController@redirectToGoogle');
Route::get('/auth/google/callback', 'Auth\LoginController@handleGoogleCallback');

Route::get('auth/facebook', 'Auth\LoginController@redirectToFacebook');
Route::get('auth/facebook/callback', 'Auth\LoginController@handleFacebookCallback');


