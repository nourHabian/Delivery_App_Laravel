<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function showOrderUser(Request $Request){
        $orders = User::find($Request->id)->orders;
        return response()->json($orders, 200);
    }
}
