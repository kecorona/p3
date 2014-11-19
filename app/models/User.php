<?php

class User {

	private $users;

	public function setPath($path) {

		$this->path = $path;

	}

	public function getPath() {

		return $this->path;

	}
	
	public function getUsers() {
		return $this->users;
	}

	public function getUserCount() {
		$user_count = Input::get('user_count');

		if(!is_null($user_count))
			return $user_count;
		else
			throw new Exception("Error Processing Request", 1);
			
	}

	public function getAddress() {
		$address = Input::get('address');

		if(!is_null($address))
			$address = $faker->streetAddress . '<br>' . $faker->city . ', ' . $faker->stateAbbr . ' ' . $faker->postCode . '<br>';

		return $this->address;
	}

	public function getBio() {
		$bio = Input::get('bio');

		if(!is_null($bio))
			$bio = $faker->text . '<br>';

		return $this->bio;
	}

	

	
	public function getUserArray($users, $depth=$_POST('user_count')) {
		if(!is_array($users) || !$depth) return 0;

		$result = count($users);

		foreach($users as $array)
			$result+=getArray($array, $depth-1);

		return $result;
	}

	

}