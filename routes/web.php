<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('accommodation', function () {
    return view('accommodation'); // will return accommodation.blade.php
});

Route::get('dining', function () {
    return view('dining'); // will return dining.blade.php
});

Route::get('tariff', function () {
    return view('tariff');  // will return tariff.blade.php
});

Route::get('location', function () {
    return view('location');  // will return location.blade.php
});


Route::get('index', 'CardsController@index');  // will return index.blade.php
// will create feedback
Route::post('cards', 'CardsController@create');

Route::get('cards/{card}', 'CardsController@show');  // will  read/show feedback

Route::post('cards/{card}/notes', 'NotesController@store');
// will store feedback/comment
Route::get('cards/{card}/delete', 'CardsController@delete');
// will delete feedback
Route::get('notes/{note}/edit', 'NotesController@edit');
// will edit feedback
Route::patch('notes/{note}', 'NotesController@update');
