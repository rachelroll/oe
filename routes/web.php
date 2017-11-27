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



Route::get('/', 'IndexController@index');
Route::resource('/register', 'RegisterController');
Route::get('/login', 'RegisterController@login');
Route::get('/items/{item}', 'ItemController@show');
//关于我们
Route::get('/about', 'AboutController@index');
//技术支持
Route::get('/support', 'AboutController@support');

//联系我们
Route::get('/contact', 'AboutController@contact');

