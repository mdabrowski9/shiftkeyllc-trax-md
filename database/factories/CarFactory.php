<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Car;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    return [
        'make' => $faker->word,
        'model' => $faker->word,
        'year' => $faker->year,
        'trip_count' => $faker->numberBetween(0,10000),
        'trip_miles' => $faker->randomFloat(3, 0, 200000)
    ];
});
