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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function () {
   return View('admin');
})->middleware('role:Administrator');