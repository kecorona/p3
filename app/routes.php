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

Route::get('pages.random_users', function() {
	return View::make('pages.random_users');
});

Route::post('pages.random_users', function()
{   //set variables
    $email = Input::get('email');
    $bio = Input::get('bio');
    $user_count = Input::get('user_count');

    

    $faker = Faker::create();
    $results = '';

    //process form information submitted by user
    for($i = 0; $i <= $user_count; $i++) {
        $results[] = '<p>'.$faker->name.'<br>';
        if(isset($_POST['email'])) {
				$results .= $faker->email.'<br>';
			}
			if(isset($_POST["bio"])) {
				$results .= $faker->paragraph[1].'<br>';
			}
		}

        return View::make('pages.random_users')->with('results', $results));
    
    

  

});

Route::get('pages.lorem_ipsum', function() {
    return View::make('pages.lorem_ipsum');
});

Route::post('pages.lorem_ipsum', function() {
    return View::make('pages.lorem_ipsum');
});