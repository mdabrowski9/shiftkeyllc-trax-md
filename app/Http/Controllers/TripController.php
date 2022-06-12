<?php

namespace App\Http\Controllers;

use App\Http\Requests\TripStoreRequest;
use App\Models\Car;
use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    public function index()
    {
        $tripsCollection = [];
        $trips = Trip::all();

        foreach ($trips as $trip){
            $tripsCollection[] = $trip->setAttribute('car', Car::find($trip->getAttribute('car_id')));
        }
        return [
            'data' => $tripsCollection
        ];
    }

    public function store(TripStoreRequest $request)
    {
        Trip::create($request->validated());
    }
}
