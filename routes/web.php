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
    return view('tariff');
});

Route::get('location', function () {
    return view('location');
});


Route::get('index', 'CardsController@index');

Route::post('cards', 'CardsController@create');

Route::get('cards/{card}', 'CardsController@show');

Route::post('cards/{card}/notes', 'NotesController@store');

Route::get('cards/{card}/delete', 'CardsController@delete');

Route::get('notes/{note}/edit', 'NotesController@edit');

Route::patch('notes/{note}', 'NotesController@update');
