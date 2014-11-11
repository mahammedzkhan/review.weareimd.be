<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reviews', function($table)
		{
		    $table->increments('id');
		    $table->integer('rating');
		    $table->text('tips');
		    $table->timestamps();
		    $table->integer('course_id')->unsigned();
		    $table->foreign('course_id')
		      ->references('id')->on('courses');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('reviews');
	}

}
