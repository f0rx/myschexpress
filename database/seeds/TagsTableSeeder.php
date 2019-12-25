<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Tag', 15)->create();
        $this->command->info('Tags Table Seeded!');
        $this->command->info(' ');
    }
}
