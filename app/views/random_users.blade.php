@extends('layouts.default')

@section('head')

{{ HTML::style('css/style.css') }}


@stop

@section('header')

@stop

@section('title')
	<h1>Random User Generator</h1>
@stop

@section('content')
	<div class="uk-container uk-text-center">
		<h1>Random User Generator</h1>
	</div>
	<div class="uk-container uk-text-center">
	
		<form class="uk-form">
		
		{{ Form::open(array('url'=>'random_users', 'method' => 'GET', 'id' => 'random_users')) }}
			
			<fieldset id = 'uG_form'>
				<legend>
					<h3>Number of Users</h3>
				</legend>
				{{ Form::number('user_count', '', ['name' => 'user_count', 'name' => 'user_count', 'class' => 'form-control']) }}
			</fieldset>

			<fieldset id = 'uG_form'>
				<legend>
					<h3>Required</h3>
				</legend>
				{{ Form::checkbox('name', '', ['name' => 'name', 'class' => 'form-control']) }}
				{{ Form::label('name', 'Name')}}
			</fieldset>

			<div class="uk-grid">

			<div class="uk-width-1-2">
				<fieldset id = 'uG_form'>
					<legend>
						<h3>Gender</h3>
					</legend>
					{{ Form::checkbox('gender', 'male', false, ['id' => 'gender' ]); }}
					{{ Form::label('gender', 'Male') }}
					<br />
					{{ Form::checkbox('gender', 'female', false, ['id'=>'gender']); }}
					{{ Form::label('gender', 'Female') }}
				</fieldset>
			</div>

			<div class="uk-width-1-2">
				<fieldset id = 'uG_form'>
					<legend>
						<h3>Additional Options</h3>
					</legend>
					{{ Form::checkbox('address', 'address', false, ['id' => 'address', ]); }}
					{{ Form::label('address', 'Address') }}	
					{{ Form::checkbox('bio', 'bio', false, ['id'=>'bio']); }}
					{{ Form::label('bio', 'Profile Bio') }}
				</fieldset>
			</div>
			</div>

			<fieldset id = 'uG_form'>
			{{ Form::submit('submit', array('id' => 'submit', 'name' => 'submit', 'class' => 'button')) }}
			</fieldset>

		{{ Form::close() }}
						
		</form>
	


	
           
      
   
	<div class="uk-container uk-text-center">
		<dl class="uk-description-list-line">
			<fieldset id="users">
		        <legend><h2>Result</h2></legend>
		        <div id="result">
		       
		        	
		        
		        </div>
		      
		    </fieldset>


		</dl>

	</div>
	
</div>
	




@stop





