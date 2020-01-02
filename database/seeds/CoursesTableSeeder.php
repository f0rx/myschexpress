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
        $this->command->info('Creating Courses...');

        if (App\Instructor::all()->count() < 1)
            $this->call(InstructorsTableSeeder::class);
        $this->command->info('Instructors Table has been Seeded!');

        foreach (App\Instructor::all() as $instructor) {
            array_push($this->instructorIds, $instructor->id);
        }

        // $ex = ['Most Popular', 'Free', 'Premium'];
        // for ($i = 0; $i < count($ex); $i++) {
        //     array_push($this->specialTags, App\Tag::create(['name' => $ex[$i], 'is_featured' => true])->id);
        // }

        /* When seeding for eztra data */

        foreach (App\Tag::whereIsFeatured(true)->get() as $ex) {
            array_push($this->specialTags, $ex->id);
        }

        factory(\App\Course::class, 300)->create()->each(function ($course) {
            for ($i = 0; $i < 2; $i++) { // Attach random tags to each course
                $course->tags()->attach($this->specialTags[array_rand($this->specialTags)]);
            }

            for ($i = 0; $i < 3; $i++) { // Run this loop 3 time - attach 3 Instructors to each course
                $course->instructors()->attach($this->instructorIds[array_rand($this->instructorIds)]);
            }
        });

        $this->command->info(' ');
    }
}
