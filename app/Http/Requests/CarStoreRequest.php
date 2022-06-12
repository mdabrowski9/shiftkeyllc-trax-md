<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarStoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'year' => 'required|integer|max:' . today()->year,
            'make' => 'required|string',
            'model' => 'required|string',
        ];
    }
}
