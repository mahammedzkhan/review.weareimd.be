<?php

class ReviewTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */

	public function testReviewAll()
	{
		// the controller at /review/all needs to pass a variable $reviews to the view
		$this->call('GET', 'review/all');
		$this->assertViewHas('reviews');
	}

}
