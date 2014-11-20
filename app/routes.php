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

Route::controller('/', 'HomeController');
Route::controller('random_users', 'UserController');
Route::controller('lorem_ipsum', 'LoremIpsumController');

Route::post('random_users', 'UserController@index');
Route::get('random_users', 'UserController@genUsers');

Route::post('lorem_ipsum', 'LoremIpsumController@index');
Route::get('lorem_ipsum', 'LoremIpsumController@genLorem');

