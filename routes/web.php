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

Route::get('/', 'IndexController@index')->name('homepage')->middleware('guest');
Route::get('/about', 'IndexController@about')->name('about');
Route::get('/room_gallery', 'IndexController@room_gallery')->name('room_gallery');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
