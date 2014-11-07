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


Route::any('random_users', 'UserController@index');



Route::post('lorem_ipsum', 'LoremIpsumController@index');
Route::get('lorem_ipsum', 'LoremIpsumController@index');