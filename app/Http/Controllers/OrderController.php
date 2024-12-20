<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Order;
use App\Models\Product;
use App\Models\Size;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function storeOrder(Request $request)
    {
        $user_id = Auth::user()->id;
        $product_id = $request->product_id;
        $product = Product::findOrFail($product_id);
        $product_size = $request->size;
        $size = Size::where('name', $product_size)->FirstOrFail();
        $price = $request->quantity * $product->price;
        Order::create([
            'user_id' => $user_id,
            'product_id' => $product_id,
            'size_id' => $size->id,
            'quantity' => $request->quantity,
            'price' => $price,
            'submission_time' => Carbon::now()->toDateTimeString()
        ]);
        return response()->json([
            'message' => 'Order added successfully'
        ], 200);
    }
    public function showOrderUser(Request $request)
    {
        $orders = User::find($request->id)->orders;
        return response()->json($orders, 200);
    }
    public function updateOrderSize(Request $request)
    {
        $size_old_id = Order::where('id', $request->id)->FirstOrFail()->size_id;
        $size_new_id = Size::where('name', $request->size_new)->FirstOrFail()->id;
        $product_id = Order::where('id', $request->id)->FirstOrFail()->product_id;
        DB::table('product_size')->where('product_id', $product_id)
            ->where('size_id', $size_old_id)->update(['size_id' => $size_new_id]);
        return response()->json([
            'message' => 'Order updated successfully'
        ], 200);
    }
    public function destroyOrder(Request $request) 
    {
        $order_id = $request->order_id;
        $order = Order::findOrFail($order_id);
        if ($order->is_ordered) {
            return response()->json([
                'message' => 'You can not delete this order anymore'
            ], 200);
        }
        $order->delete();
        return response()->json([
            'message' => 'Order deleted successfully'
        ], 204);
    }
    public function showUserCart(Request $request)
    {
        $orders = User::find($request->id)->orders;
        $product_list = [];
        foreach ($orders as $order)
            if (!$order->is_ordered)
                $product_list[] = $order;
        return response()->json($product_list, 200);
    }
    public function updateOrderuQantity(Request $request){
        $quantity=$request->qantity_new;
        $order=Order::where('id', $request->id)->FirstOrFail();
        $price = $order->price/$order->quantity;
        $price=$price*$quantity;
        Order::where('id', $request->id)->update([
          'quantity'=>$quantity,
          'price'=>$price
        ]);
        return response()->json(['message' => 'update successful'], 200);
      }
} 