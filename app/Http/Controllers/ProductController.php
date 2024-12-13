<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Store;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response()->json($products, 200);
    }
    public function showProductInfo(Request $request)
    {
        $product_id = $request->id;
        $product = Product::findOrFail($product_id);
        $store = $product->store;
        $store_name = $store->name;
        $product->makehidden('store');
        return response()->json([
            'store name' => $store_name,
            'product' => $product
        ], 200);
    }
}
