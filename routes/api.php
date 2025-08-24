<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\TShirtController;
use App\Http\Controllers\Api\MaterialController;
use App\Http\Controllers\Api\ColorController;
use App\Http\Controllers\Api\SizeController;


Route::get('/users', [UserController::class, 'index']);


Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:api')->post('/logout', [AuthController::class, 'logout']);
Route::middleware('auth:api')->get('/me', [AuthController::class, 'me']);


Route::get('/tshirts/{id}', [TShirtController::class, 'show']);
Route::get('/tshirts', [TShirtController::class, 'index']);
Route::post('/tshirt', [TshirtController::class, 'store']);


Route::get('/materials', [MaterialController::class, 'index']);
Route::get('/colors', [ColorController::class, 'index']);
Route::get('/sizes', [SizeController::class, 'index']);
