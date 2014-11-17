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


		$course = Input::get('course_id');
		$rating = Input::get('rating');
		$tips = Input::get('tips');

		$validator = Validator::make(
		    array(
		        'course_id' => $course,
		        'rating' => $rating,
		        'tips' => $tips
		    ),
		    array(
		        'course_id' => 'required',
		        'rating' => 'required',
		        'tips' => 'required'
		    )
);
		if ($validator->fails())
{
    // The given data did not pass validation
   	$messages = $validator->messages();

}else{

	$r = new Review();
	$r->course_id = $course;
	$r->rating = $rating;
	$r->tips = $tips;
	$r->save();
}

		



		return View::make('review/create')->with('messages', $messages);
	}

	public function all()
	{
		// 
		$reviews = DB::table('reviews')
            		->join('courses', 'reviews.course_id', '=', 'courses.id')
            		->get();
		var_dump($reviews);
		return View::make('review/all')->with('reviews', $reviews);
	}

}
