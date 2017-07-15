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


// routes for the hotel
Route::get('/hotel', 'HotelController@index')->name('hotel');
Route::get('/hotel/create', 'HotelController@create')->name('hotel.store');
Route::post('/hotel', 'HotelController@store')->name('hotel.store');
Route::get('/{hotel}', 'HotelController@show');

Route::post('/hotel/{hotel}/room', 'Admin\RoomController@save')->name('submit');



// routes @ IndexController
Route::get('/', 'IndexController@index')->name('homepage')->middleware('guest');
Route::get('/show', 'IndexController@show')->name('show');
Route::get('/allhotel', 'IndexController@allhotel')->name('allhotel');
Route::get('/gallery', 'IndexController@gallery')->name('gallery');
//Route::get('/hotel', 'IndexController@hotel')->name('hotel');

// routes @ RegisterController
Route::get('/verifyEmail', 'Auth\RegisterController@verifyEmail')->name('verifyEmail');
Route::get('verify/{email}/{verifyToken}', 'Auth\RegisterController@sentEmail')->name('sentEmail');

//routes @HomeController
Route::get('user/yourEvents', 'IndexController@yourEvents')->name('yourEvents');
Route::get('user/yourTrips', 'IndexController@profile')->name('yourTrips');
Route::get('user/profile', 'IndexController@profile')->name('profile');
Route::get('/admin/create', 'IndexController@CreateRooms')->name('admin.rooms.create');
//resource controllers
Route::resource('yourEvents', 'EventsController');

// default routes
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


    Route::get('/dashboard', 'Admin\DashboardController@index')->name('admin.dashboard');
    //Route::get('/admin/create', 'Admin\RoomController@create')->name('admin.rooms.create');
    //Route::post('/rooms/{hotel}/create/submit/', 'Admin\RoomController@save')->name('submit.room');
    Route::post('/rooms/search', 'Admin\RoomController@search')->name('submit.room.search');

