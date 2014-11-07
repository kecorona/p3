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
	

	
	public function getUserArray($users, $depth=1) {
		if(!is_array($users) || !$depth) return 0;

		$result = count($users);

		foreach($users as $array)
			$result+=getArray($array, $depth-1);

		return $result;
	}

	

}