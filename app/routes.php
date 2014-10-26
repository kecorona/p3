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


Route::get('random_users', 'UserController@index');

Route::post('random_users', 'UserController@create');



Route::post('/lorem_ipsum', 'LoremIpsumController@showLorem');

Route::get('/lorem_ipsum', function() {
    return View::make('lorem_ipsum');
});

Route::post('/lorem_ipsum', function() {
    return View::make('lorem_ipsum');
});