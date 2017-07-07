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
// special routes for this application
// routes @ IndexController
Route::get('/', 'IndexController@index')->name('homepage')->middleware('guest');
Route::get('/about', 'IndexController@about')->name('about');
Route::get('/gallery', 'IndexController@gallery')->name('gallery');

// routes @ RegisterController
Route::get('/verifyEmail', 'Auth\RegisterController@verifyEmail')->name('verifyEmail');
Route::get('verify/{email}/{verifyToken}', 'Auth\RegisterController@sentEmail')->name('sentEmail');

//routes @HomeController
Route::get('user/yourEvents', 'IndexController@yourEvents')->name('yourEvents');
Route::get('user/yourTrips', 'IndexController@profile')->name('yourTrips');
Route::get('user/profile', 'IndexController@profile')->name('profile');

//resource controllers
Route::resource('yourEvents', 'EventsController');

// default routes
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
