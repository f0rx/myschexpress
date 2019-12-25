<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Course;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    $rand = mt_rand(1, 4);
    return [
        'title' => ucwords($faker->words($rand, true)),
        'category_id' => $faker->numberBetween(1, App\Category::all()->count()),
        'summary' => $faker->paragraph($nb = 2, $asText = true),
        'overview' => $faker->paragraph($nb = 4, $asText = true),
        'created_at' => $faker->dateTimeThisMonth('now', null),
        'updated_at' => $faker->dateTimeThisMonth('now', null)
    ];
});
