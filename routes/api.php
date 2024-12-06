<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
//test1
Route::post('user/register', [UserController::class, 'register']);
Route::post('user/login', [UserController::class, 'login']);
//test2