@extends('layouts.default')

@section('head')

@stop

@section('title')
	<h1>Lorem Ipsum Generator</h1>
@stop

@section('content')

<div class="uk-text-center ">
	<h1 class="uk-header">Lorem Ipsum Generator</h1>
	<caption>Generate 'lorem ipsum' style paragraphs.</caption>
</div>

<hr class="uk-grid-divider">
<div class="uk-grid">
		
	<div class="uk-width-medium-1-2">
		
		<form class="uk-form uk-form-horizontal">
	
		{{ Form::open(array(
							'url'=>'lorem_ipsum', 
							'method' => 'GET')) }}
					
			<div class="uk-form-row">
				<fieldset id='li_form'>
					<label class="uk-form-label">Number of Paragraphs</label>
					

					<div class="uk-form-controls">
					
						{{ Form::number('paragraph_count', '1', array('id' => 'paragraph_count', 'name' => 'paragraph_count', 'class' => 'uk-width-1-1')); }}
						{{ Form::label('', '')}}

					</div>
				</fieldset>
			</div>

			<div class="uk-form-row uk-final-row">
				
				<fieldset id="submit" class="uk-button">
					{{ Form::submit('submit', array('id' => 'submit', 'class' => 'uk-button uk-responsive-width btn-submit')) }}			
				</fieldset>
			
			</div>
					
			{{ Form::close() }}

		</form>
		
		</div>

		<div class="uk-width-medium-1-2 uk-scrollable-text" id="results">

	   		@if(isset($results))
	   			@if(is_array($results))
	   				@foreach($results as $returndata)
		   				@if(isset($data))
			   			
			   				<p>
			                    <xmp></xmp>
			                     <p> {{ $returndata }}</p>
			                    <xmp></xmp>
			                </p>
			                
		                @else
		                    <p>{{ $returndata }}</p>
		                @endif
		       			
	       			@endforeach
       			@endif
       		@endif

		</div>
</div>
@stop