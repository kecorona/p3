@extends('layouts.default')

@section('head')

@stop

@section('header')

@stop

@section('title')
	<h1>Random User Generator</h1>
@stop

@section('content')

<div class="uk-width-1-1 uk-text-center">
    <h1 class="uk-header">Random User Generator</h1>
    <caption>Generate a list with random user data according to the parameters specified on the form below.</caption>
</div>

<hr class="uk-grid-divider">

<div class="uk-grid">
		
	<div class="uk-width-medium-1-2" data-uk-grid-margin>
		
		<form class="uk-form uk-form-horizontal">

		
		{{ Form::open(array(	
					'url'=>'random_users',
					'method' => 'GET' )) }}
		
		<div class="uk-form-row">
			<fieldset id = 'uG_form'>
				<label class="uk-form-label">Number of Users</label>
				<div class="uk-form-controls ">

				{{ Form::text('user_count', '', array('id' => 'user_count','name' => 'user_count', 'class' => 'form-align')) }}
				{{ Form::label('','')}}
						
				</div>
			</fieldset>
		</div>
		<div class="uk-form-row">
			<fieldset id = 'uG_form'>
				<label class="uk-form-label">Name</label>
				<div class="uk-form-controls">

				{{ Form::checkbox('title', '1', false, array('id' => 'title', 'class' => 'checkbox', 'type' => 'checkbox'))}}
				{{ Form::label('title','Title')}}
				<br />
				
				{{ Form::checkbox('firstName', '1', false, array('id' => 'firstName', 'class' => 'checkbox', 'type' => 'checkbox')) }}
				{{ Form::label('firstName', 'First Name')}}
				
				{{ Form::checkbox('lastName', '1', false, array('id' => 'lastName', 'class' => 'checkbox', 'type' => 'checkbox')) }}
				{{ Form::label('lastName', 'Last Name')}}
				
				<br/>
				{{ Form::checkbox('suffix', '1', false, array('id' => 'suffix', 'class' => 'checkbox', 'type' => 'checkbox'))}}
				{{ Form::label('suffix', 'Suffix')}}


				</div>
			</fieldset>
		</div>

		<div class="uk-form-row">
			<fieldset id = 'uG_form'>
				<label class="uk-form-label">Additional Options
				</label>
				<div class="uk-form-controls">
				
				{{ Form::checkbox('address', '1', false, array('id' => 'address', 'class' => 'checkbox', 'type' => 'checkbox')); }}
				{{ Form::label('address', 'Address') }}

				<br />
				{{ Form::checkbox('bio', '1', false, array('id'=>'bio', 'class' => 'checkbox', 'type' => 'checkbox')); }}
				{{ Form::label('bio', 'Profile Bio') }}
				</div>
			</fieldset>
		</div>
			
			
		<div class="uk-form-row">
			<fieldset id = 'submit'>
			{{ Form::submit('submit', array('id' => 'submit', 'class' => 'button')) }}

			<!--{{ Form::image(asset('my/image.gif', 'submit')) }}-->
			
			</fieldset>
		</div>
		{{ Form::close() }}
					
		</form>
	</div>
	
	<div class="uk-width-medium-1-2 uk-scrollable-text" id="results">	
		<div class="uk-container uk-scrollable-text" id='results'>

   		@if(isset($results))
   			
   			@if(is_array($results))
   				
   				@foreach($results as $returndata)
       			
       			<div class="uk-grid uk-animation-fade">
       				<div class="uk-width-medium-1-3">
        			
	       				<img src='/../../assets/img/user.png' width='100px'height='100px'/>
	       			
       				</div>
       				
       				<div class="uk-width-medium-2-3">
       					<dl class="uk-description-list-line">
       						<dt>  
       				
       						@if(array_key_exists('title', $returndata))
	       					{{ $returndata['title'] }}
	       					
	       					@endif

	       					@if(array_key_exists('firstName', $returndata))
	       					{{ $returndata['firstName'] }}
	       					
	       					@endif

	       					@if(array_key_exists('lastName', $returndata))
	       					{{ $returndata['lastName'] }}
	       					
	       					@endif

	       					@if(array_key_exists('suffix', $returndata))
	       					{{ $returndata['suffix'] }}
	       					
	       					@endif
							</dt>
       			
   							<dd>
	       					@if(array_key_exists('address', $returndata))
	       					{{ $returndata['address'] }}
	       					@endif
							</dd>

							<dd>
   							@if(array_key_exists('bio', $returndata)) 
   							{{ $returndata['bio'] }}
   							@endif
							</dd>

						</dl>
   					</div>
   				</div>
       			<hr />
       			@endforeach
       	
       		@endif

       	@endif
   	
   	</div>
   	
</div>
</div>



@stop





