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

Route::post('/random_users', 'UserController@showUsers');

Route::post('/lorem_ipsum', 'LoremIpsumController@showLorem');

Route::get('/random_users', function() {
	return View::make('random_users');
});

Route::post('/random_users/{results?}', function($results) {  
    return View::make('random_users')->with('results', $results);

});

Route::get('/lorem_ipsum', function() {
    return View::make('lorem_ipsum');
});

Route::post('/lorem_ipsum', function() {
    return View::make('lorem_ipsum');
});