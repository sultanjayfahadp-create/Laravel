<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TableController;
use App\Http\Controllers\AuthController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware(['auth:sanctum', 'token.message'])->group(function () {
    // Auth routes
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user', [AuthController::class, 'user']);
    
    // YOUR EXISTING TABLE CONTROLLER ROUTES (unchanged)
    Route::get('/getAllStudents', [TableController::class, 'getAllStudents']);
    Route::post('/students', [TableController::class, 'store']);
    Route::get('/students/{id}', [TableController::class, 'show']);
    Route::put('/students/{id}', [TableController::class, 'update']);
    Route::delete('/students/{id}', [TableController::class, 'destroy']);
});

Route::get('/user', [TableController::class, 'getAllStudents']);

Route::apiResource('students', TableController::class);