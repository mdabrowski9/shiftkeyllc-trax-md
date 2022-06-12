<?php

namespace App\Models;

use App\Eloquent;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin Eloquent
 * */
class Car extends Model
{
    protected $fillable = [
        'make',
        'model',
        'year',
        'trip_count',
        'trip_miles',
        'user_id',
    ];

    protected $casts = [
        'year' => 'integer'
    ];
}
