<?php

class LoremIpsum {
	protected $guarded = array();

	public static $rules = array(
		'paragraph_count' => 'required|min:1|max:50');
}

