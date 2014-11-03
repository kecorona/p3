<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::resource('/', 'HomeController');


Route::post('random_users.index', 'UserController@index');

Route::get('random_users.index', 'UserController@index');


Route::post('lorem_ipsum.index', 'LoremIpsumController@index');
Route::get('lorem_ipsum.index', 'LoremIpsumController@index');