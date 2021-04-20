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
// Route::get('/phone','PhoneController@index')->name('phone');
// Route::get('/users','UserController@index')->name('user');
Route::get('/users','PhoneController@index')->name('user');
Route::get('/post','PostController@index')->name('posts');
Route::get('/hasMany','PostController@posts');
