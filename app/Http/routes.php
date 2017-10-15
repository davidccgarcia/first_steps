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

// Route::get('/notes', function () {

//     $notes = App\Note::all();

//     return view('notes.index', compact('notes'));
// });

Route::get('/notes/{id}/{slug?}', function ($id, $slug = null) {
    $note = App\Note::find($id);

    dd($note, $slug);
})->where('id', '[0-9+]');