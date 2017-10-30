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
    return view('layouts.app');
});

Route::group(['middleware' => 'auth'], function () {

	Route::post('/events/add', 'Event@postAddEvent');

	Route::get('/events', 'Event@getEvents');
	Route::get('/events/confirm-delete/{id}', 'Event@getConfirmDelete');
	Route::get('/events/delete/{id}', 'Event@getDoDelete');

	Route::get('/event/add', function () {
	    return view('layouts.app')->nest("content", "event.add");
	});

	Route::get('/thanks', function() {
		return view('layouts.app')->nest("content", "layouts.basic");
	});


	Route::get('/attendees', 'Attendee@index');
	//Route::get("/attendees/{id?}", 'Attendee@show');
});

//Route::get('/{id}', 'Event@getEvent');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
