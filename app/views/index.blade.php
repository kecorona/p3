@extends('layouts.default')

@section('head')

@stop

@section('title')
    <h1>Developer's Best Friend</h1>
@stop

@section('content')

<div class="uk-text-center">
        <h1 class="uk-header">Developer's Best Friend</h1>
    </div>

    <hr class="uk-grid-divider">

    <div class="uk-width-medium-1-2 uk-text-center">
        <panel class="uk-panel">
        <h1 class="uk-panel-title">Random User Generator</h1>

        <p class="uk-panel-content">Generate a list of users made up of randomly chosen first names, last names, street addresses, and lorem ipsum placeholder content for the user'sprofile.</p>
        
        <a class="btn btn-primary btn-default" href='random_users'>Try it out! 
            <span class="glyphicon glyphicon-share-alt"></span>
        </a> 
        </panel>
    </div>

    <div class="uk-width-medium-1-2 uk-text-center">
    <panel class="uk-panel">
        <h1 class="uk-panel-title">Lorem Ipsum Generator</h1>

        <p class="uk-panel-content">Generate 'Lorem Ipsum' dummy text. Enter a specified number of paragraphs and watch the magic happen.</p>
        <a class="btn btn-primary btn-default" href="lorem_ipsum">Try it out! <span class="glyphicon glyphicon-share-alt"></span></a>
    </panel>
    </div>

    @stop
</body>
</html>