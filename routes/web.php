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

Route::get('/greet', 'DemoController@greet');
Route::get('/movies/{genre?}', 'MoviesController@index');
Route::get('/magazines/{genre?}', 'MagazinesController@index');
Route::get('/simple', function () {
  return view('simple');
});
Route::get('/other', function () {
  return view('other');
});
Route::get('/json', function () {
  return response()->json(['name' => 'Abigail', 'state' => 'CA']);
});
