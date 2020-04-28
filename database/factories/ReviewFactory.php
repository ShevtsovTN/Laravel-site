<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Review;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    return [
        'author' => $faker->name,
        'position' => $faker->jobTitle,
        'title' => 'Perfect Home for me',
        'description' => $faker->text,
        'created_at' => $faker->date(),
        'updated_at' => null
    ];
});
