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
Route::get('/testt','TestController@index');
Route::post('/testt','TestController@store');
Route::delete('testt/{message}','TestController@destroy');
Route::get('testt/{message}','TestController@show');
Route::get('testt/{message}/edit','TestController@edit');
Route::patch('testt/{message}','TestController@update');
