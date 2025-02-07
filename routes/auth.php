<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\LoginController;
use App\Http\Controllers\API\RgstController;
use App\Http\Controllers\Api\RegisterController;

Route::post('/login', [LoginController::class, 'login']);
Route::post('/rgst', [RgstController::class, 'rgst']);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('/logout', [LoginController::class, 'logout']);
    Route::get('/user', function (Request $request) {
        return response()->json($request->user());
    });
});
