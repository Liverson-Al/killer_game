<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
//
//Route::group(['middleware' => 'auth:sanctum', 'namespace' => 'App\Http\Controllers\User'], function() {
//   Route::get('/get', 'ShowController');
//   Route::post('/create', 'StoreController');
//});
//Route::get('/get', 'App\Http\Controllers\ShowController ');


Route::group([
    'middleware' => 'api',
    'prefix'     => 'auth',
    'namespace'  => 'App\Http\Controllers'
], function ($router) {
    Route::post('login', 'AuthController@login');
    Route::post('register', 'AuthController@register');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
});

Route::group([
    'middleware' => 'jwt.auth',
    'namespace'  => 'App\Http\Controllers\User'
], function ($router) {
    Route::get('user', 'IndexController');
    Route::get('user/{userId}', 'ShowController');
//    Route::patch('user/{userId}', 'EditController');
//    Route::delete('user/{userId}', 'DeleteController');
});

