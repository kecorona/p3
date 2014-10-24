<?php

class UserController extends BaseController {
	/*
	|--------------------------------------------------------------------------
	| User Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get(pages.random_users', 'UserController@show');
	|
	*/
	/**
	 *  
	 *	@return Array $results
	 */

	private $results;

	public function showUsers() {

		// set user count
	    $user_count = Input::get('user_count');

	    $results = '';

	    // process form
	    for($i = 0; $i <= $user_count; $i++) {

	        $faker = Faker::create();
	        $results = . $faker->name() .'<br>';

	        $email = Input::get('email');
	        if(isset($_POST['email'])) {
				$results .= . $faker->email() .'<br>';
			}
	        $bio = Input::get('bio');
			if(isset($_POST['bio'])) {
				$results .= . $faker->text() .'<br>';
			}
		
	    	
	  	}
	  	return $results;
	}
}