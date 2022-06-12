<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarStoreRequest;
use App\Models\Car;

class CarController extends Controller
{
    public function index(): array
    {
        return [
            'data' => Car::get()
        ];
    }

    public function store(CarStoreRequest $request)
    {
        Car::create($request->validated());
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
