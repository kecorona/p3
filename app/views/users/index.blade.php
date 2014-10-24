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
				<h1>Random User Generator</h1>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1">
				<h3>Number of users</h3>
				<div>

				{{ Form::open(array('url'=>'users/show') }}

				{{ Form::label('user_count', 'Number of users', array('id'=>'user_count')) }}
				{{ Form::text('user_count', '25', array('id'=>'user_count')) }}
				
				</div>
				
				<h3>Additional options</h3>
				<div>

				{{ Form::label('email', 'Email Address', array('id'=>'email')) }}
				{{ Form::checkbox('email', 'foo@bar.com', array('id'=>'email')) }}

				{{ Form::label('bio', 'Profile Bio', array('id'=>'bio')) }}
				{{ Form::checkbox('bio', 'Lorem ipsum...', array('id'=>'bio')) }}

				</div>

				{{ Form::submit('Submit') }}
				{{ Form::close() }}
		
		</div>
	</div>
	

@stop

	

	



