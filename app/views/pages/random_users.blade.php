@extends('layouts.default')

@section('head')

@stop

@section('title')
	<h1>Random User Generator</h1>
@stop

@section('content')
	<div class="uk-container uk-text-center">
		<h1>Random User Generator</h1>
	</div>

	<div class="uk-container">
		<form class="uk-form">
		{{ Form::open(array('url'=>'pages.random_users')) }}
			<div class="uk-grid" data-uk-grid-margin>
				<div class="uk-width-1-1">
					<fieldset data-uk-margin>
						<legend>Number of Users</legend>
						{{ Form::label('user_count', '',['name' => 'user_count', 'class' => 'uk-form-control'])}}
						{{ Form::number('user_count', '', ['name' => 'user_count']) }}

						@if(isset($user_count))
						{{ "value=\"$user_count\"" }}
						@endif

					</fieldset>
				</div>
				<div class="uk-width-1-1">
					<fieldset data-uk-margin>	
						<legend>Additional Options</legend>
						
						<div class="uk-form-row" data-uk-button-checkbox>
						{{ Form::label('email', 'Email', ['name'=>'email']) }}
							{{ Form::checkbox('email', '', ['name' => 'email', 'class' => 'uk-button', 'data' => 'data-uk-button']) }}

							@if(isset($email))
							{{ "value=\"$email\"" }}
							@endif
						</div>
						<div class="uk-form-row uk-form-control">
							{{ Form::label('bio', 'Profile Bio', array('id'=>'bio')) }}
							{{ Form::checkbox('bio', '', ['name'=>'bio']) }}

							@if(isset($bio))
							{{ "value=\"$bio\"" }}
							@endif
						</div>

					</fieldset>
				</div>
				<div class="uk-width-1-1">
					<fieldset data-uk-margin>
						<div class="uk-form-row uk-form-control">	
						{{ Form::submit('Submit', array('class' => 'uk-button', 'method' => 'get')) }}

						 
						{{ Form::close() }}
						</div>
					</fieldset>
				</div>
			</div>
		</form>
		
		
		 <?php
		 echo implode('<br>', $results);
		 ?>
	
	</div>




@stop

	

	



