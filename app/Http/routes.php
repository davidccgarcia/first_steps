<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/notes', 'NoteController@index');

Route::get('/notes/create', 'NoteController@create');
Route::post('/notes/store', 'NoteController@store');

Route::get('notes/{id}', 'NoteController@show')->where('id', '[0-9]+');
