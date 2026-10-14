<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
Route::get('hello/{name}', function ($name) {
    return "hello $name";
});

Route::get('hello-post/{name}', [HelloWorldController::class, 'hello']);
*/

Route::get('bands', [BandController::class, 'getAll']);
Route::post('bands/store', [BandController::class, 'store']);
Route::get('bands/{id}', [BandController::class, 'getById']);
Route::get('bands/genre/{id}', [BandController::class, 'getGenderById']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
