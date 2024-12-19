<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Middleware\CorsMiddleware;

Route::apiResource('contacts', ContactController::class);
Route::apiResource('blogs', BlogController::class);


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::middleware(['cors'])->group(function () {
//     Route::get('/blogs', 'BlogController@index');
// });
