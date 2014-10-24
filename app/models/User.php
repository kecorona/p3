<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use Faker;


	private $random_user;
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function setPath($path) {
		$this->path = $path;
	}

	public function getPath() {
		return $this->path;
	}

	public function getUserCount() {

		$random_users = Faker::create();

		return $this->random_users;
	}

	/**
	 *	@param $user_params
	 *	@return Array $results
  	 */
	private function show() {

		$faker = Faker::create();

		$results = Array();

		$random_user = User::create(array(
				'first_name' => $faker->firstName,
				'last_name' => $faker->lastName
				));
			if (isset($_POST["email"])) {
				$random_user .= $faker->email;
			}
			if (isset($_POST["bio"])) {
				$random_user .= $faker->paragraph[1];
			}
	}

}
