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
    public function updateOrder(Request $request){
        $size_old_id=Order::where('id',$request->id)->FirstOrFail()->size_id;
        $size_new_id=Size::where('name',$request->size_new)->FirstOrFail()->id;
        $product_id=Order::where('id',$request->id)->FirstOrFail()->product_id;
        if(DB::table('product_size')->where('product_id',$product_id)->where('size_id',$size_new_id)->value('quantity')<=0)
        return response()->json(['message'=>'Product is not available'],422);
        DB::table('product_size')->where('product_id',$product_id)
        ->where('size_id',$size_old_id)->update(['size_id'=>$size_new_id]);
        return response()->json(['message' => 'update successful'], 200);
    }
    public function showUserCart(Request $request){
        $orders = User::find($request->id)->orders;
        $product_list=[];
        foreach($orders as $order)
        if(!$order->is_ordered)
          $product_list[]=$order;
        return response()->json($product_list, 200);

    }
}