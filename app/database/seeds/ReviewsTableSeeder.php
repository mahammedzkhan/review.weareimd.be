<?php
class ReviewsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('reviews')->delete();
       
        $review = array(
        	"rating" => 4,
        	"course_id" => 1,
        	"tips" => "Graag meer leerstof en hoger tempo! ;)"
        );

        Review::create($review);
       
    }

}