<?php
class CoursesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('courses')->delete();
        Course::create(array('name' => 'PHP1'));
        Course::create(array('name' => 'PHP2'));
        Course::create(array('name' => 'Webtechnologie 1'));
        Course::create(array('name' => 'Webtechnologie 2'));
    }

}