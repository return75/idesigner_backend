<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\AuthController;


Route::get('/users', [UserController::class, 'index']);


Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:api')->post('/logout', [AuthController::class, 'logout']);
Route::middleware('auth:api')->get('/me', [AuthController::class, 'me']);
