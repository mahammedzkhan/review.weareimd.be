<?php

class ReviewController extends BaseController {

	public function create()
	{
		return View::make('review/create');
	}

	public function handleCreate()
	{
		// work with Input::get('');
		// work with validation to test if all required fields are there
		// http://laravel.com/docs/4.2/validation
		// if validation fails, make sure to print an error in your view, check app/tests/ReviewTest.php

		return View::make('review/create');
	}

	public function all()
	{
		// 

		return View::make('review/all');
	}

}
