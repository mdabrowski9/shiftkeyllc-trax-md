<?php

use App\Models\Trip;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trip::insert(
            [
                [
                    'id'  => 1,
                    'date' => Carbon::now()->subDays(1),
                    'miles' => 11.3,
//                    'total' => 45.3,
                    'car_id' => 1
                ],
                [
                    'id'  => 2,
                    'date' => Carbon::now()->subDays(2),
                    'miles' => 12.0,
//                    'total' => 34.1,
                    'car_id' => 4
                ],
                [
                    'id'  => 3,
                    'date' => Carbon::now()->subDays(3),
                    'miles' => 6.8,
//                    'total' => 22.1,
                    'car_id' => 1
                ],
                [
                    'id'  => 4,
                    'date' => Carbon::now()->subDays(4),
                    'miles' => 5,
//                    'total' => 15.3,
                    'car_id' => 2
                ],
                [
                    'id'  => 5,
                    'date' => Carbon::now()->subDays(5),
                    'miles' => 10.3,
//                    'total' => 10.3,
                    'car_id' => 3
                ]
            ]
        );

        factory(Trip::class, 2)->create();
    }
}
