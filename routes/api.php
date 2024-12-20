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

    // to show user's completed orders
    Route::get('user/ordered', [UserController::class, 'showCompletedOrderes']);
    // to show user cart
    Route::get('user/cart', [UserController::class, 'showUserCart']);


    // to get all stores
    Route::get('store/index', [StoreController::class, 'index']);
    // to get all products in a specific store
    Route::get('store/products', [StoreController::class, 'showStoreProducts']);


    // to get all products from all stores
    Route::get('product/index', [ProductController::class, 'index']);
    // to get a specific product information
    Route::get('product/show', [ProductController::class, 'showProductInfo']);


    // to add an order
    Route::post('order/store', [OrderController::class, 'storeOrder']);
    // to edit an order size
    Route::put('order/update/size', [OrderController::class, 'updateOrderSize']);
    // to edit an order quantity
    Route::put('order/update/quantity', [OrderController::class, 'updateOrderuQuantity']);
    // to delete an order
    Route::delete('order/delete', [OrderController::class, 'destroyOrder']);
});
