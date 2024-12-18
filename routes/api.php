<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('user/register', [UserController::class, 'register']);
Route::post('user/login', [UserController::class, 'login']);

Route::get('store/index', [StoreController::class, 'index']);
Route::get('store/products', [StoreController::class, 'showStoreProducts']);

Route::get('product/index', [ProductController::class, 'index']);
Route::get('product/show', [ProductController::class, 'showProductInfo']);

Route::get('order/show', [OrderController::class, 'showOrderUser']);
Route::put('order/update', [OrderController::class, 'updateOrdert']);
Route::post('order/add', [OrderController::class, 'addOrder']);