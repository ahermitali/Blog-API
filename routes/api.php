<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::middleware('api')->group(function () {
    Route::apiResource('blogs', BlogController::class);
});



Route::get('/test', function () {
    return response()->json(['message' => 'API is working']);
});