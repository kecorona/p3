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
Route::resource('random_users', 'UserController');
Route::resource('lorem_ipsum', 'LoremIpsumController');

Route::post('random_users', 'UserController@getIndex');
Route::get('random_users', 'UserController@getUsers');

Route::post('lorem_ipsum', 'LoremIpsumController@getIndex');
Route::get('lorem_ipsum', 'LoremIpsumController@getLorem');

