<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
  public function show(){
    $all=Store::all();
    return response()->json($all,200);
  }
  public function showStoreProducts(Request $Request){
    $products=Store::find($Request->id)-> products;
    return response()->json($products,200);
  }
}