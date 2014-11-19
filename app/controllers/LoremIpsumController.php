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
	protected $loremIpsum;

	public function __construct(LoremIpsum $loremIpsum) {
		$this->loremIpsum=$loremIpsum;
	}

	public function index() {
			
		return View::make('lorem_ipsum');
	}

	public function genLorem() {

		$data = Input::all();
		$results = '';
		$paragraph_count = 0;

		$validation = Validator::make($data, LoremIpsum::$rules);

    		//array('paragraph_count' => '1'),
    		//array('paragraph_count' => 'required|min:1|max:50')
		//);

		$faker = Faker::create();

		if($validation->passes()) {
			$results = $faker->paragraphs($data['paragraph_count']);
		} else {
			$results = json_encode(array('success' => false, 'errors' => $validation, 'message' => 'The number of paragraphs must be between 1 and 50.'));
		}

		if(Request::ajax()) {
			// ajax content
			return View::make('lorem_ipsum')->with(compact('results'))
											->with(compact('data'));
		} else {

			return View::make('lorem_ipsum')->with(compact('results'))
										   	->with(compact('data'));		
		}
	}
}


