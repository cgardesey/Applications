<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\course;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    return [
        'course_code' => $faker->unique()->regexify('[A-Z]{3}[0-9]{3}'),
        'course_name' => $faker->sentence(3),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
