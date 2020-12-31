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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/register', 'Apis\AuthController@register');
Route::match(['get','post'],'/login', 'Apis\AuthController@login')->name('login');
Route::get('/logout', 'Apis\AuthController@logout');

// Route::apiResource('/ceo', 'Apis\CEOController')->middleware('auth:api');

Route::group([
	'prefix' => '/ceo',
	'namespace' => 'APIS',
	'middleware' => 'auth:api'
],function(){
	Route::get('/','CEOController@list');
	Route::get('/add','CEOController@add');
});