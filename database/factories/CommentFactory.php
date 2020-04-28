<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'author' => $faker->name,
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'text' => $faker->text,
        'like' => rand(0, 10),
        'dislike' => rand(0, 5)
    ];
});
