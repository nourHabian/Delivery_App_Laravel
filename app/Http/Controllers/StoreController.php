<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        $all = Store::all();
        return response()->json($all, 200);
    }

    public function showStoreProducts(Request $Request)
    {
        $products = Store::find($Request->store_id)->products;
        return response()->json($products, 200);
    }

    public function searchStore(Request $request)
    {
        $name = $request->name;
        $stores = Store::all();
        $required_stores = array();
        foreach ($stores as $store) {
            if (str_contains(strtolower($store->name), strtolower($name))) {
                array_push($required_stores, $store);
            }
        }
        return response()->json($required_stores, 200);
    }
}
