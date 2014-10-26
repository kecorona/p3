@extends('layouts.default')

@section('head')

@stop

@section('title')
	<h1>Random User Generator</h1>
@stop

@section('content')
	<div class="uk-container uk-text-center">
		
		
		
		<?php
		$faker = Faker::create();
		
		$submit = Input::get('submit');
		$user_count = Input::get('user_count');
		$email = Input::get('email');
		$bio = Input::get('bio');

		

		if ($submit) {
			for ($i = 0; $i < $user_count; $i++) {
				echo $faker->name;

				if ($email != null) {
					echo $faker->email;
				}
				if ($bio != null) {
					echo $faker->text;
				} 
			}
		}
		?>




@stop

	





