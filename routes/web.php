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

/*
Route::get('/', function () {
return view('welcome');
});
 */

Route::get('/', 'HomeController@index');
//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index');
Route::get('/contact-us', 'PagesController@contact');
Route::get('/about-us', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::get('/get-taxi', 'PagesController@get_taxi');
Route::get('/tarrif', 'PagesController@tarrif');
Route::get('/team', 'PagesController@team');
Route::get('/earn-with-us', 'PagesController@earn');

/**
 * Admin routes
 */

Route::get('/admin/bookings', 'Admin\BookingController@index');

Route::get('/admin', 'Admin\AdminController@index');

Auth::routes();