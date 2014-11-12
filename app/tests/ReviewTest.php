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

	public function testHandleCreateError()
	{
		// test submission of a bad review
		// your view should have an error message div.alert-danger
		// <div class="alert alert-danger" role="alert">...</div>

		$input = array(
			'rating' => 4,
			'course_id' => 1,
			'tips' => ''
		);

		// Input::replace($input) can be used for testing any method which      
	    // directly gets the parameters from Input class
	    Input::replace($input);

		$crawler = $this->client->request('POST', '/review/create', $input);
		$this->assertTrue($this->client->getResponse()->isOk());
		$this->assertCount(1, $crawler->filter('div.alert-danger')->first());
	}

}
