<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::middleware('auth:api')->group(function () {
    Route::prefix('car')
        ->as('car.')
        ->group(function () {
            Route::get('/show/{car_id}', 'CarController@show')->name('show');
            Route::get('/all', 'CarController@index')->name('index');
            Route::post('/store', 'CarController@store')->name('store');
            Route::delete('/{car_id}/destroy', 'CarController@destroy')->name('destroy');
        });
    Route::prefix('trip')
        ->as('trip.')
        ->group(function () {
            Route::get('/all', 'TripController@index')->name('index');
            Route::post('/store', 'TripController@store')->name('store');
        });
});
