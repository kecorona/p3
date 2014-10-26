<?php


class User extends Eloquent {

	public function __construct(User $user) {
		$this->user = $user;
	}
}
