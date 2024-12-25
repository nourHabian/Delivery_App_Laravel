<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function index()
    {
        $stores = Store::all();
        foreach ($stores as $store) {
            $file_path = $store->store_photo;
            if (Storage::disk('public')->exists($file_path)) {
                $store['store_url'] = asset(Storage::url($file_path));
            } else {
                $store['store_url'] = asset(Storage::url('profile_photos/default_profile_photo.png'));
            }
        }
        return response()->json($stores, 200);
    }

    public function showStoreProducts(Request $Request)
    {
        $products = Store::find($Request->store_id)->products;
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

    public function searchStore(Request $request)
    {
        $name = $request->name;
        $stores = Store::all();
        $required_stores = array();
        foreach ($stores as $store) {
            if (str_contains(strtolower($store->name), strtolower($name))) {
                $file_path = $store->store_photo;
                if (Storage::disk('public')->exists($file_path)) {
                    $store['store_url'] = asset(Storage::url($file_path));
                } else {
                    $store['store_url'] = asset(Storage::url('profile_photos/default_profile_photo.png'));
                }
                array_push($required_stores, $store);
            }
        }
        return response()->json($required_stores, 200);
    }
}
