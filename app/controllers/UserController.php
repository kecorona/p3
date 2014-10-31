<?php

require_once ('/../../vendor/fzaninotto/faker/src/autoload.php');

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
		
		return View::make('random_users.index');
		
	}

	public function __construct(User $user) {
	
		
		
		$submit = Input::get('submit');
		if ($submit) {
			$faker = Faker::create();
			$user = '';
			$count = Input::get('user_count');
			for ($i = 0; $i < $count; $i++) {

			$address = Input::get('address');
			$bio = Input::get('bio');

			$user =  $faker->name . '<br>';

			if ($address != null) {
				$user .= $faker->address . '<br>';
			}
			if ($bio != null) {
				$user .= $faker->text . '<br>';
			}	

			echo $user;
			echo '<hr>' . '<br>';

			echo '<a href="random_users.index">Clear Page</a>';
			echo '<a href="/">Home</a>';
		}

	}


}
}