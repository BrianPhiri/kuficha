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
Auth::routes();

Route::get('/admin', 'AdminController@index');

Route::get('/', "MemoController@index");
Route::get('/{id}', "MemoController@show");
Route::post('/memos', 'MemoController@store');

Route::post('/decrypt', 'MemoController@decryptMessage');

<<<<<<< HEAD
Route::resource('memos', 'MemoController');
Route::post('/memos/{id}', 'MemoController@decryptMessage');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
=======
>>>>>>> 0ae363e8fc6a5d03a5f9cc628d49db227bade8da
