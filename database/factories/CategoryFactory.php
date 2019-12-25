<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    $rand = mt_rand(2, 3);
    return [
        'name' => ucwords($faker->words($rand, true)),
        'summary' => $faker->words($nb = 8, $asText = true),
        'created_at' => $faker->dateTimeThisMonth('now', null),
        'updated_at' => $faker->dateTimeThisMonth('now', null)
    ];
});
