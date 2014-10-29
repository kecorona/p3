<?php

class LoremIpsumController extends BaseController {
	/*
	|--------------------------------------------------------------------------
	| Lorem Ipsum Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('lorem_ipsum'', 'LoremIpsumController@show');
	|
	*/




	public function __construct() {

		$submit = Input::get('submit');
		if ($submit) {
	    	$paragraph_count = Input::get('paragraph_count');

	    	$paragraphs = '';

	    // process form
	    for($i = 0; $i < $paragraph_count; $i++) {
	    	$generator = new LoremIpsum();
	    	$paragraphs = $generator->getParagraphs(1);

	        echo implode ('<p>', $paragraphs);
	        echo '<br>' . '<br>';
		
	  	}

	  	
	}
}

public function index() {

			
		return View::make('lorem_ipsum.index');
	}
}