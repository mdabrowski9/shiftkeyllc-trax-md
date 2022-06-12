<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(): array
    {
        return [
            'data' => Car::get()
        ];
    }

    public function store(Request $request)
    {
        $newCar = new Car();
        $newCar->fill($request->toArray())->save();
    }

    public function show(int $carId): Car
    {
        return Car::find($carId);
    }

    public function destroy(int $carId)
    {
        Car::destroy($carId);
    }
}
