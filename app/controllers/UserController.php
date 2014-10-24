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
	|	Route::get('pages.random_users', 'UserController@show');
	|
	*/

	public function show() {
		$user_count = Input::get('user_count');

		$results = '';
	}
}