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
Route::get('event', 'PayController@index');
Route::post('pay', 'PayController@pay');
Route::get('pay-success', 'PayController@success');
*/

 Route::get('/', function () {
    return view('welcome');

});
Route::get('event', 'PayController@index');
Route::post('pay', 'PayController@pay');
Route::get('pay-success', 'PayController@success');
Route::get('status', 'PayController@postPay');
