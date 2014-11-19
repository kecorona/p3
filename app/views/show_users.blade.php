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
	<div class="uk-container uk-text-center" id="results">
		<dl class="uk-description-list-line">	       
       		@if(isset($results))
       			@if(is_array($results))
       				@foreach($results as $returndata)
	       				@if(array_key_exists('name', $returndata))
	       					<dt>{{ $returndata['name'] }}
	       					</dt>
	       				@endif

	       				@if(array_key_exists('address', $returndata))
	       					<dd>{{ $returndata['address'] }}</dd>
	       				@endif

	       				@if(array_key_exists('bio', $returndata))
	       					<dd>{{ $returndata['bio'] }}</dd>
	       				@endif
	       			@endforeach
	       		@endif
	       	@endif


		</dl>

	</div>
	
</div>
	




@stop





