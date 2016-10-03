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

Route::get('/', 'FrontController@index');
Route::get('/login', 'FrontController@login');

Route::resource('usuario', 'UsuarioController');

Route::resource('log', 'LogController');

Route::resource('semilla', 'SeedController');

Route::resource('cultivo', 'CropController');

