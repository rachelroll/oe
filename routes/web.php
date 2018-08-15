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



Route::get('/', 'IndexController@index')->name('index');
Route::get('/en', 'IndexController@enIndex')->name('en.index');
Route::get('/ch', 'IndexController@cnIndex')->name('cn.index');

Route::resource('/register', 'RegisterController');
Route::get('/login', 'RegisterController@login');
Route::get('/product/{id}', 'ProductController@show')->name('product.show');//产品详情
Route::get('/product', 'ProductController@index')->name('product.index');

//products instruction
Route::get('/instruction', 'InstructionController@index')->name('instruction.index');

Route::get('category/{id}', 'CategoryController@show')->name('category.show');

//关于
Route::get('/about/{id}', 'AboutController@show')->name('about.show');

//footer
Route::get('/foot/{id}', 'FootController@show')->name('foot.show');
//send-message
Route::post('/send-message', 'IndexController@sendMessage')->name('index.send-message');
//search
Route::get('/search', 'SearchController@search')->name('search.search');


////技术支持
//Route::get('/support', 'AboutController@support');
//
////联系我们
//Route::get('/contact', 'AboutController@contact');

