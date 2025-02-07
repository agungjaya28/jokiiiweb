<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WorkerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Api\RegisterController;

Route::apiResource('/posts', App\Http\Controllers\Api\PostController::class);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth:sanctum');