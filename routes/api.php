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

Route::middleware('auth:sanctum')->group(function () {

    // to get all stores
    Route::get('store/index', [StoreController::class, 'index']);
    // to get all products in a specific store
    Route::get('store/products', [StoreController::class, 'showStoreProducts']);

    // to get all products from all stores
    Route::get('product/index', [ProductController::class, 'index']);
    // to get a specific product information
    Route::get('product/show', [ProductController::class, 'showProductInfo']);

    // to show user orders
    Route::get('order/show', [OrderController::class, 'showOrderUser']);
    // to edit an order
    Route::put('order/update/size', [OrderController::class, 'updateOrderSize']);
    // to add an order
    Route::post('order/store', [OrderController::class, 'storeOrder']);
    // to show user cart
    Route::get('order/cart', [OrderController::class, 'showUserCart']);
    Route::put('order/update/qantity', [OrderController::class, 'updateOrderuQantity']);
});
