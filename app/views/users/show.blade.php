@extends('layouts.default')

@section('title')
	<h1>Random User Generator</h1>
@stop

@section('head')
	<link rel="stylesheet" type="text/css" href="assets/css/booststrap.min.css">
@stop

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1">
				<h1>Random Users</h1>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1">
				@foreach($user as $user)
				<p>{{ $user }}</p>
				@endforeach

				<?php require_once '/../../vendor/fzaninotto/faker/src/autoload.php' ?>
		
		</div>
	</div>


@stop

	

	



