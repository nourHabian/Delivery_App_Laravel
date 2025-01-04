<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        foreach ($products as $product) {
            $file_path = $product->product_photo;
            if (Storage::disk('public')->exists($file_path)) {
                $product['product_url'] = asset(Storage::url($file_path));
            } else {
                $product['product_url'] = asset(Storage::url('profile_photos/default_profile_photo.png'));
            }
        }
        return response()->json($products, 200);
    }
    public function showProductInfo(Request $request)
    {
        $product_id = $request->product_id;
        $product = Product::findOrFail($product_id);
        $store = $product->store;
        $store_name = $store->name;
        $product->makehidden('store');
        $file_path = $product->product_photo;
        if (Storage::disk('public')->exists($file_path)) {
            $fileUrl = asset(Storage::url($file_path));
        } else {
            $fileUrl = asset(Storage::url('profile_photos/default_profile_photo.png'));
        }
        return response()->json([
            'store name' => $store_name,
            'product' => $product,
            'product_url' => $fileUrl
        ], 200);
    }

    public function searchProduct(Request $request)
    {
        $name = $request->name;
        $products = Product::all();
        $required_products = array();
        foreach ($products as $product) {
            if (str_contains(strtolower($product->name), strtolower($name))) {
                $file_path = $product->product_photo;
                if (Storage::disk('public')->exists($file_path)) {
                    $product['product_url'] = asset(Storage::url($file_path));
                } else {
                    $product['product_url'] = asset(Storage::url('profile_photos/default_profile_photo.png'));
                }
                array_push($required_products, $product);
            }
        }
        return response()->json($required_products, 200);
    }
    public function addToFavorites(Request $request){
        Product::findOrFail($request->id_product);
    Auth::user()->favoriteProducts()->syncWithoutDetaching($request->id_product);
    return response()->json(['message'=> 'product added to favorite'], 200);
    }
    public function removeFromFavorites(Request $request){
        Product::findOrFail($request->id_product);
        Auth::user()->favoriteProducts()->detach($request->id_product);
        return response()->json(['message'=> 'product removed from favorite'], 200);
    }
    public function getFavoriteProducts(Request $request){
          $product = Auth::user()->favoriteProducts()->get();
    return response()->json($product, 200);
}

    }

