<?php

interface OutputInterface {
	public function load();
}

class SerializedArrayOutput implements OutputInterface {
	public function load() {
		return serialize($users);
	}
}

class JsonStringOutput implements OutputInterface {
	public function load() {
		return json_encode($users);
	}
}

class ArrayOutput implements OutputInterface {
	public function load() {
		return $users;
	}
}