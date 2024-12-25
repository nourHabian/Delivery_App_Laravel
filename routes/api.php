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
    Route::get('user/cart/show', [UserController::class, 'showUserCart']);
    // to order the current cart
    Route::get('user/cart/order', [UserController::class, 'OrderCart']);
    // to show user profile
    Route::get('user/profile/show', [UserController::class, 'showProfile']);
    // to edit user profile
    Route::post('user/profile/update', [UserController::class, 'updateProfile']);
    // to logout the user
    Route::delete('user/logout', [UserController::class, 'logout']);


    // to get all stores
    Route::get('store/index', [StoreController::class, 'index']);
    // to get all products in a specific store
    Route::get('store/products', [StoreController::class, 'showStoreProducts']);
    // search for a store by it's name
    Route::get('store/search', [StoreController::class, 'searchStore']);


    // to get all products from all stores
    Route::get('product/index', [ProductController::class, 'index']);
    // to get a specific product information
    Route::get('product/show', [ProductController::class, 'showProductInfo']);
    // search for a product by it's name
    Route::get('product/search', [ProductController::class, 'searchProduct']);


    // to add an order
    Route::post('order/store', [OrderController::class, 'storeOrder']);
    // to edit an order size
    Route::put('order/update/size', [OrderController::class, 'updateOrderSize']);
    // to edit an order quantity
    Route::put('order/update/quantity', [OrderController::class, 'updateOrderQuantity']);
    // to delete an order
    Route::delete('order/delete', [OrderController::class, 'destroyOrder']);
});
