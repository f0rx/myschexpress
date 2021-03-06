<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tag;
use Faker\Generator as Faker;

$factory->define(Tag::class, function (Faker $faker) {
    return [
        'name' => ucfirst($faker->unique()->word()),
        'created_at' => $faker->dateTimeThisMonth('now', null),
        'updated_at' => $faker->dateTimeThisMonth('now', null)
    ];
});
