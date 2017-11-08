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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/eventsecurity-form', 'BookingController@eventsecurity');
Route::post('/eventsecurity-form', 'BookingController@booksecurityevent');

Route::get('/event-form', 'BookingController@event');
Route::post('/event-form', 'BookingController@bookevent');

Route::get('/privatesecurity-form', 'BookingController@privatesecurity');
Route::post('/privatesecurity-form', 'BookingController@bookprivatesecurity');

Route::get('/corporatesecurity-form', 'BookingController@corporatesecurity');
Route::post('/corporatesecurity-form', 'BookingController@bookcorporatesecurity');

Route::get('/generalconsultancy-form', 'BookingController@consultancy');
Route::post('/generalconsultancy-form', 'BookingController@bookconsult');
Route::get('/careers', 'BookingController@career');
Route::post('/enquiry', 'BookingController@inquiry');


Route::get('/eventsecurity', 'BookingController@moreeventsecurity');
Route::get('/events', 'BookingController@moreevent');
Route::get('/corporatesecurity', 'BookingController@morecorporatesecurity');
Route::get('/privatesecurity', 'BookingController@moreprivatesecurity');
Route::get('/generalconsultancy', 'BookingController@moreconsultant');
Route::get('/privacy', 'BookingController@privacy');
Route::get('/gallery', 'BookingController@gallery');
Route::get('/newsupdate', 'BookingController@news');
Route::get('/email', function () {

	return view('emails.eventmail');

});
