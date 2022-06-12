<?php

use App\Models\Car;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Car::insert([
            'id' => 1,
            'make' => 'Land Rover',
            'model' => 'Range Rover Sport',
            'year' => 2017,
            'trip_count' => 2,
            'trip_miles' => 18.1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Car::insert([
            [
                'id' => 2,
                'make' => 'Ford',
                'model' => 'F150',
                'year' => 2014
            ],
            [
                'id' => 3,
                'make' => 'Chevy',
                'model' => 'Tahoe',
                'year' => 2015
            ],
            [
                'id' => 4,
                'make' => 'Aston Martin',
                'model' => 'Vanquish',
                'year' => 2018
            ]
        ]);
        factory(Car::class, 2)->create();
    }
}
