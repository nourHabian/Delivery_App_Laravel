<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Http\Requests\LoginReguest;
use App\Http\Requests\RegisterRequest;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $filePath = "profile_photos/default_profile_photo.png";
        if ($request->hasFile('profile_photo')) {
            $file = $request->file('profile_photo');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('profile_photos', $fileName, 'public'); // Saves in storage/app/public/profile_photos
        }
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'password' => Hash::make($request->password),
            'phone_number' => $request->phone_number,
            'location' => $request->location,
            'profile_photo' => $filePath,
        ]);
        $token = $user->CreateToken('user_active')->plainTextToken;
        return response()->json([
            'message' => 'register successful',
            'token' => $token
        ], 201);
    }

    public function login(LoginReguest $request)
    {
        if (!Auth::attempt($request->only('phone_number', 'password')))
            return response()->json(['message' => 'invalid number or password'], 401);
        $user = User::where('email', $request->email)->FirstOrFail();
        $token = $user->CreateToken('user_active')->plainTextToken;
        return response()->json([
            'message' => 'login successful',
            'token' => $token
        ], 200);
    }

    public function showUserOrder()
    {
        $orders = Auth::user()->orders;
        return response()->json($orders, 200);
    }

    public function showUserCart()
    {
        $orders = Auth::user()->orders;
        $product_list = [];
        foreach ($orders as $order)
            if (!$order->is_ordered)
                $product_list[] = $order;
        return response()->json($product_list, 200);
    }

    public function showCompletedOrderes()
    {
        $orders = Auth::user()->orders;
        $product_list = [];
        foreach ($orders as $order)
            if ($order->is_ordered)
                $product_list[] = $order;
        return response()->json($product_list, 200);
    }

    public function orderCart()
    {
        $user = Auth::user();
        $orders = $user->orders;
        $cart = array();
        foreach ($orders as $order) {
            if (!$order->is_ordered) {
                array_push($cart, $order);
            }
        }
        if (empty($cart)) {
            return response()->json([
                'message' => 'Cart is empty.'
            ], 200);
        }
        foreach ($cart as $order) {
            $current_quantity = DB::table('product_size')
                ->where('size_id', $order->size_id)
                ->where('product_id', $order->product_id)
                ->value('quantity');
            if ($order->quantity > $current_quantity) {
                if ($current_quantity == 0) {
                    $order->delete(); // check if it'll really delete it
                    return response()->json([
                        'error' => 'OutOfStock',
                        'order' => $order,
                        'message' => 'This product is currently out of stock, and the order will be canceled. Please check back later or explore similar products.'
                    ], 409);
                } else {
                    return response()->json([
                        'error' => 'InsufficientQuantity',
                        'order' => $order,
                        'message' => 'The requested quantity is not available at the moment. Please reduce the quantity to ' . $current_quantity . ' or check back later for availability.'
                    ], 409);
                }
            }
        }
        // now, all orders are correct and can be done
        $total_price = 0;
        foreach ($cart as $order) {
            $total_price += $order->price;
            Order::findOrFail($order->id)->update([
                'is_ordered' => true,
                'submission_time' => Carbon::now(),
                'expected_delivery_time' => Carbon::now()->addMinutes(2),
            ]);
            $table = DB::table('product_size')
                ->where('size_id', $order->size_id)
                ->where('product_id', $order->product_id);
            $current_quantity = $table->value('quantity');
            $table->update(['quantity' => $current_quantity - $order->quantity]);
            if ($current_quantity - $order->quantity == 0) {
                $table->delete();
                $productExists = DB::table('product_size')->where('product_id', $order->product_id)->exists();
                if (!$productExists) {
                    Product::findOrFail($order->product_id)->delete();
                }
            }
        }
        return response()->json([
            'message' => 'Cart has been ordered successfully. You will recieve the orders soon.',
            'total price' => $total_price,
        ], 200);
    }
    public function showProfile()
    {
        $user = Auth::user();
        $file_path = $user->profile_photo;
        if (Storage::disk('public')->exists($file_path)) {
            $fileUrl = asset(Storage::url($file_path));
        } else {
            $fileUrl = asset(Storage::url('profile_photos/default_profile_photo.png'));
        }
        return response()->json([
            'first_name' => $user->first_name,
            'last_name' => $user->last_name,
            'password' => $user->password,
            'phone_number' => $user->phone_number,
            'location' => $user->location,
            'profile_photo' => $fileUrl,
        ], 200);
    }
    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'first_name' => 'sometimes|string|max:50|min:3',
            'last_name' => 'sometimes|string|max:50|min:3',
            'profile_photo' => 'file|mimes:jpg,jpeg,png|max:2048',
        ]);
        if ($request->hasFile('profile_photo')) {
            $file = $request->file('profile_photo');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            Storage::disk('public')->delete($user->profile_photo);
            $filePath = $file->storeAs('profile_photos', $fileName, 'public');
            $user->update(['profile_photo' => $filePath]);
        }
        if ($request->first_name) {
            $user->update(['first_name' => $request->first_name]);
        }
        if ($request->last_name) {
            $user->update(['last_name' => $request->last_name]);
        }
        return response()->json(['message' => 'update successfully']);
    }
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json(['message' => 'logout successfully']);
    }
}
