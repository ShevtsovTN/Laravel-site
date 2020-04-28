<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Listing;
use Faker\Generator as Faker;

$factory->define(Listing::class, function (Faker $faker) {

    return [
        'listing_id' => rand(700000, 999999),
        'author' => $faker->name,
        'address' => $faker->address,
        'amount' => rand(200000, 700000),
        'area' => rand(45, 90),
        'rooms' => rand(1, 4),
        'baths' => rand(1, 2),
        'type' => 'For Sale',
        'options' => json_encode(['Gated Community', 'Window Shutters', 'Heated Floors', 'Private Patio']),
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'description_title' => $faker->sentence($nbWords = 15, $variableNbWords = true),
        'description' => $faker->text,
        'created_at' => $faker->date(),
        'updated_at' => null
    ];
});
