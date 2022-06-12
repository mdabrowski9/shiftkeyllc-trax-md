<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Car;
use App\Models\Trip;
use Faker\Generator as Faker;

$factory->define(Trip::class, function (Faker $faker) {
    $miles = $faker->randomFloat(2,0,300);

    $car = Car::inRandomOrder()->first();
    $car->update([
        'trip_count' => $car->trip_count + 1,
        'trip_miles' => $car->trip_miles + $miles,
    ]);

    return [
        'date' => $faker->date(),
        'miles' => $miles,
//        'total' => $miles + $faker->randomFloat(2,0, 100),
        'car_id' => $car->id
    ];
});
