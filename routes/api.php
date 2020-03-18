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

Route::middleware('throttle:60,1,default')->group(function () {
    Route::post('item/add','ItemController@add');

    Route::get('item/{id}','ItemController@info');

    Route::match(['get','post'],'/', 'ItemController@index');
});


