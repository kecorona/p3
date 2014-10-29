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
	<nav class="uk-nav">
		<ul class="uk-subnav">
			<li><a href="lorem_ipsum">Clear</a></li>
			<li><a href="/">Home</a></li>
		</ul>
	</nav>

	<div class="uk-container">
		<form class="uk-form">
		{{ Form::open(array('url'=>'lorem_ipsum', 'method' => 'POST')) }}
			<div class="uk-grid" data-uk-grid-margin>

				<div class="uk-width-1-1">
					<fieldset data-uk-margin>
						<legend>Number of Paragraphs</legend>
						{{ Form::label('paragraph_count', '',['name' => 'paragraph_count', 'class' => 'uk-form-control'])}}
						{{ Form::number('paragraph_count', '1', ['name' => 'paragraph_count']); }}
					</fieldset>


				</div>

				<div class="uk-width-1-1">
					<fieldset data-uk-margin>
						<div class="uk-form-row uk-form-control">
						
						{{ Form::token() }}
						{{ Form::submit('Submit', array('name' => 'submit', 'class' => 'uk-button')) }}

						 
						{{ Form::close() }}
						</div>
					</fieldset>
				</div>

			</div>
		</form>

	
	</div>
@stop