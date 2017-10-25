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
    return view('layout.master');
});

Route::post('/events/add', 'Event@postAddEvent');

Route::get('/events', 'Event@getEvents');
Route::get('/{id?}', 'Event@getEvent');
Route::get('/events/confirm-delete/{id}', 'Event@getConfirmDelete');
Route::get('/events/delete/{id}', 'Event@getDoDelete');

Route::get('/event/add', function () {
    return view('layout.master')->nest("content", "event.add");
});

Route::get('/thanks', function() {
	return view('layout.master')->nest("content", "layout.basic");
});


Route::get('/attendees', 'Attendee@index');
Route::get("/attendees/{id?}", 'Attendee@show');