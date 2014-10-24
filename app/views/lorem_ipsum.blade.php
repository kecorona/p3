@extends('layouts.default')

@section('head')

@stop

@section('title')
	<h1>Lorem Ipsum Generator</h1>
@stop

@section('content')
	<div class="uk-container uk-text-center">
		<h1>Lorem Ipsum Generator</h1>
	</div>

	<div class="uk-container">
		<form class="uk-form">
		{{ Form::open(array('url'=>'/lorem_ipsum', 'method' => 'POST')) }}
			<div class="uk-grid" data-uk-grid-margin>

				<div class="uk-width-1-1">
					<fieldset data-uk-margin>
						<legend>Number of Paragraphs</legend>
						{{ Form::label('paragraph_count', '',['name' => 'paragraph_count', 'class' => 'uk-form-control'])}}
						{{ Form::text('paragraph_count', '1', ['name' => 'paragraph_count']); }}
					</fieldset>


				</div>

				<div class="uk-width-1-1">
					<fieldset data-uk-margin>
						<div class="uk-form-row uk-form-control">
						
						{{ Form::submit('Submit', array('class' => 'uk-button', 'method' => 'GET')) }}

						 
						{{ Form::close() }}
						</div>
					</fieldset>
				</div>

			</div>
		</form>

		{{ $paragraphs }}
	</div>
@stop