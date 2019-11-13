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
Route::post('storeclientbooking', 'BookingController@storedata')->name('storeclientbooking');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('home/{id}', 'HomeController@viewclient')->name('home/{id}');
Route::get('customerBookingReport/{id}', 'HomeController@pdf')->name('customerBookingReport/{id}');
Route::get('editcustomer/{id}', 'BookingController@edit')->name('editcustomer/{id}');
Route::post('update/{id}', 'BookingController@update')->name('update/{id}');
