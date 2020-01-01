<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('Creating Categories...');

        factory('App\Category', 10)->create()->each(function ($category) {

            $this->command->info("Generating associated Tags");

            for ($i = 0; $i <= 2; $i++) { // Run this loop twice - applies only two tags to each Category
                $category->tags()->attach(mt_rand(1, App\Tag::all()->count()));
            }
        });

        $this->command->info(' ');
    }
}
