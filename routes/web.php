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

Route::get('/', 'PagesController@index');
Route::get('/r/{category}', 'PagesController@show')->name('posts.show');
Route::post('/getmsg', 'PagesController@getmsg');
Route::get('/getmsg', 'PagesController@getmsg');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
