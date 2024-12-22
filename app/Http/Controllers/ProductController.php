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
        $product_id = $request->product_id;
        $product = Product::findOrFail($product_id);
        $store = $product->store;
        $store_name = $store->name;
        $product->makehidden('store');
        return response()->json([
            'store name' => $store_name,
            'product' => $product
        ], 200);
    }

    public function searchProduct(Request $request)
    {
        $name = $request->name;
        $products = Product::all();
        $required_products = array();
        foreach ($products as $product) {
            if (str_contains(strtolower($product->name), strtolower($name))) {
                array_push($required_products, $product);
            }
        }
        return response()->json($required_products, 200);
    }
}
