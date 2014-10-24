<?php
 
class Widget extends \Eloquent {
 
	public static $rules = [
		'name' => 'required',
		'size' => array('required', 'numeric')
	];
 
	protected $fillable = ['name','description','size'];
 
}