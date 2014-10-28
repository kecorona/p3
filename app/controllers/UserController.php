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
	
	
	protected $layout = 'random_users.index';

	public function index() {
		
		return View::make('random_users.index')->with('user', $user);
		
	}

	public function show() {
		
		$faker = Faker::create();
		$user = array();
		$submit = Input::get('submit');
		$user_count = Input::get('user_count');
		$address = Input::get('address');
		$bio = Input::get('bio');

		

		if ($submit) {
			for ($i = 0; $i < $user_count; $i++) {
				$user = $faker->name . '<br>';

				if ($address != null) {
					$user .= $faker->address . '<br>';
				}
				if ($bio != null) {
					$user .= $faker->text . '<br>';
				}

					return $user();
				}
				
				
				

				return View::make('random_users.index')->with('user', $user);
			}


		}
	}

	

	public function getUserCount() {
		return $user_count;
	}


}