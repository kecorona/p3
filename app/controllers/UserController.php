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

		$view = View::make('random_users');

		$user = new User();

		$submit = Input::get('submit');
		
		$users = $user->getUsers();

		
		
		

		if (!$submit) {
			return $view;
		} else {
			$count = Input::get('user_count');

			for ($i = 0; $i < $count; $i++) {
			$users = array();
			$faker = Faker::create();
			
			$address = Input::get('address');
			$bio = Input::get('bio');

			$users[] =  $faker->name() . '<br>';

			if ($address != null) {
				$users[] = $faker->address() . '<br>';
			}
			if ($bio != null) {
				$users[] = $faker->text() . '<br>';
			}
			echo '<hr>';
			foreach ($users as $user) {
				echo $user;
				
			
			}
		}

	}
}

	
}



					/*$result[] = [
						'name' => $faker->name,
						'address' => $faker->address,
						'bio' => $faker->text
						];
				}
			}
				$user[] = $result;
			}

			return Response::json($user);
		}

	}
}*/
