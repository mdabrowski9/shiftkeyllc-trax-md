<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class TripStoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'date' => 'required|date',
            'car_id' => 'required|integer',
            'miles' => 'required|numeric',
        ];
    }

    public function validated(): array
    {
        return array_merge(parent::validated(), [
            'date' => Carbon::parse($this->date),
        ]);
    }
}
