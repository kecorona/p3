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

		return View::make('random_users');
	}		
		
	public function genUsers(){

		$min = 0;
		$max = 100;
		
		$data = Input::all();
		$results = '';
		$user_count = 0;

		if(array_key_exists('user_count', $data)) {
			$user_count = $data['user_count'];
		}

		$faker = Faker::create();

		if(isset($user_count) && $user_count > $min && $user_count < $max) {
			for ($i = 0; $i < $user_count; $i++) {
				if(array_key_exists('title', $data)) {
					$results[$i]['title'] = $faker->title($gender = null|'male'|'female');
				}
				if(array_key_exists('firstName', $data)) {
					$results[$i]['firstName'] = $faker->firstName($gender = null|'male'|'female');
				}
				if(array_key_exists('lastName', $data)) {
					$results[$i]['lastName'] = $faker->lastName;
				}
				if(array_key_exists('suffix', $data)) {
					$results[$i]['suffix'] = $faker->suffix;
				}
				if(array_key_exists('address', $data)) {
					$results[$i]['address'] = $faker->streetAddress . '<br>' .
											  $faker->city . ', ' .
											  $faker->stateAbbr . ' ' .
											  $faker->postcode;
				}
				if(array_key_exists('bio', $data)) {
					$results[$i]['bio'] = $faker->text();
				}
			}
		} else {
			$results = "Something's wrong here... try entering a number";
			Session::flash('results', $results);
		}

		if(Request::ajax()) {
			// ajax content
			return View::make('random_users')->with(compact('results'))
										   ->with(compact('data'));
		} else {

			return View::make('random_users')->with(compact('results'))
										   ->with(compact('data'));		
		}
	}
}

		/*
		$submit = Input::get('submit');
		if ($submit) {
			return View::make('show_users')->with('users', $users)
											 ->with('user', $user);
		
			$count = Input::get('user_count');
			$user = new User();
			$user->setPath(app_path());
			$users = $user->getUsers();

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
			echo Pre::render($users);
			
			

			
			}
		}

	}
}

	
*/


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
