<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Order;
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
    public function updateOrder(Request $Request){
        $size_old_id=Size::where('name',$Request->size_old)->FirstOrFail()->id;
        $size_new_id=Size::where('name',$Request->size_new)->FirstOrFail()->id;
        $product_id=Order::where('id',$Request->id)->FirstOrFail()->product_id;
        if(DB::table('product_size')->where('product_id',$product_id)->where('size_id',$size_new_id)->value('quantity')<=0)
        return response()->json(['message'=>'Product is not available'],422);
        DB::table('product_size')->where('product_id',$product_id)
        ->where('size_id',$size_old_id)->update(['size_id'=>$size_new_id]);


    }
}
