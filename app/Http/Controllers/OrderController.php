<?php

namespace App\Http\Controllers;

use App\Models\Size;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // public function addOrder(Request $request)
    // {
    //     $product_id = $request->id;
    //     $product_size = $request->size;
        
    // }
    public function showOrderUser(Request $request)
    {
        $orders = User::find($request->id)->orders;
        return response()->json($orders, 200);
    }
}
