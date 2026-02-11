<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TableController;

Route::get('/user', [TableController::class, 'getAllStudents']);

Route::apiResource('students', TableController::class);