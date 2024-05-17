<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::controller(AuthController::class)->group(function () {
    Route::post('/register', 'register');
    Route::post('/login', 'login');
    Route::get('/me', 'me')->middleware('auth:sanctum');
});
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
