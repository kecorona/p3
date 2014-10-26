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
	

	public function index() {

		return View::make('random_users.index');
	}

	public function create() {
		
		$faker = Faker::create();
		
		$submit = Input::get('submit');
		$user_count = Input::get('user_count');
		$email = Input::get('email');
		$bio = Input::get('bio');

		

		if ($submit) {
			for ($i = 0; $i < $user_count; $i++) {
				echo $faker->name;

				if ($email != null) {
					echo $faker->email;
				}
				if ($bio != null) {
					echo $faker->text;
				}

				return View::make('random_users.index');
			}
		}
	}

	

	public function getUserCount() {
		return $user_count;
	}


}