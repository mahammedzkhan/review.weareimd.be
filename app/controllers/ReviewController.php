<?php

class ReviewController extends BaseController {

	public function create()
	{
		return View::make('review/create');
	}

	public function handleCreate()
	{
		//return View::make('review/create');
	}

	public function all()
	{
		$data['reviews'] = "";
		return View::make('review/all', $data);
	}

}
