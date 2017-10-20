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

Route::post('/events/add', 'EventController@postAddAlbum');

Route::get('/events', 'EventController@getEvents');
Route::get('/events/{id?}', 'EventController@getEvent');
Route::get('/events/confirm-delete/{id}', 'EventController@getConfirmDelete');
Route::get('/events/delete/{id}', 'EventController@getDoDelete');

Route::get('/event/add', function () {
    return view('layout.master', ["type" => "event"])->nest("content", "event.add", ["type" => "event"]);
});


Route::get('/attendees', 'AttendeeController@index');
Route::get("/attendees/{id?}", 'AttendeeController@show');