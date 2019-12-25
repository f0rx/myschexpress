<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    private $instructorIds, $specialTags;

    public function __construct()
    {
        $this->instructorIds = [];
        $this->specialTags = [];
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Instructor', 4)->create()->each(function ($instructor) {
            // Push the Ids of each created Instructor into the array
            array_push($this->instructorIds, $instructor->id);
        });

        $this->command->info('Instructors Table Seeded!');
        $this->command->info(' ');

        $ex = ['Most Popular', 'Free', 'Premium'];
        for ($i = 0; $i < count($ex); $i++) {
            array_push($this->specialTags, App\Tag::create(['name' => $ex[$i], 'is_featured' => true])->id);
        }

        factory('App\Course', 20)->create()->each(function ($course) {
            for ($i = 0; $i < 2; $i++) { // Attach random tags to each course
                $course->tags()->attach($this->specialTags[array_rand($this->specialTags)]);
            }

            for ($i = 0; $i < 3; $i++) { // Run this loop 3 time - attach 3 Instructors to each course
                $course->instructors()->attach($this->instructorIds[array_rand($this->instructorIds)]);
            }
        });
        $this->command->info('Courses Table Seeded!');
        $this->command->info(' ');
    }
}
