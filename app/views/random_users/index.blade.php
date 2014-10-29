@extends('layouts.default')

@section('head')

@stop

@section('title')
	<h1>Random User Generator</h1>
@stop

@section('content')
	<nav class="uk-nav">
		<ul class="uk-subnav">
			<li><a href="random_users">Clear</a></li>
			<li><a href="/">Home</a></li>
		</ul>
	</nav>
	<div class="uk-container uk-text-center">
		<h1>Random User Generator</h1>
	</div>
	<div class="uk-container uk-text-center">
		<form class="uk-form">
		{{ Form::open(array('url'=>'random_users', 'method' => 'POST')) }}
			<fieldset>
			{{ Form::label('user_count', 'Number of Users: ') }}
			{{ Form::number('user_count', '1', array('id' => 'user_count','name' => 'user_count', 'class' => 'form-control')); }}
			</fieldset>

			<fieldset>
				<div class="uk-form-row uk-form-control">
				{{ Form::checkbox('address', '1', false, ['name' => 'address', ]); }}
				{{ Form::label('address', 'Address') }}
				</div>

				<div class="uk-form-row uk-form-control">		
				
				{{ Form::checkbox('bio', '1', false, ['name'=>'bio']); }}
				{{ Form::label('bio', 'Profile Bio') }}
				</div>
			</fieldset>

			<fieldset>
			{{ Form::token() }}
			{{ Form::submit('Submit', array('name' => 'submit', 'class' => 'uk-button')) }}
			</fieldset>

						 
		{{ Form::close() }}
						
		</form>

	
	</div>



@stop

@section('results')
		

@stop






