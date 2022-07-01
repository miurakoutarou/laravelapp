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
//第一引数　アドレス　第二引数　関数Route::get('hello', 'HelloController@index');
//public function index()
Route::get('hello', 'HelloController@index');
Route::post('hello', 'HelloController@post');

//---------実習用------------

//jissyu3_1
Route::get('jissyu3', 'Jissyu3_1Controller@index');
Route::post('jissyu3', 'Jissyu3_1Controller@post');

