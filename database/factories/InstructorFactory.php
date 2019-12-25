<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Instructor;
use Faker\Generator as Faker;

$factory->define(Instructor::class, function (Faker $faker) {
    return [
        'user_id' => mt_rand(1, \App\User::all()->count()),
        'bio' => $faker->paragraphs(2, true),
        'organization' => ucwords($faker->words(3, true)),
        'secondary_email' => $faker->companyEmail,
        'website' => $faker->url,
        'created_at' => $faker->dateTimeThisMonth('now', null),
        'updated_at' => $faker->dateTimeThisMonth('now', null)
    ];
});
