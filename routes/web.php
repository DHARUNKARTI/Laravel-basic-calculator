<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add/{x}/{y}', [UserController::class,'add']);
Route::get('/sub/{x}/{y}', [UserController::class,'sub']);
Route::get('/multiply/{x}/{y}', [UserController::class,'multiply']);
Route::get('/divide/{x}/{y}', [UserController::class,'divide']);
