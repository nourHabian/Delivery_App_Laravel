<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginReguest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $filePath = "storage\app\public\profile_photos\default_profile_photo.png";
        if ($request->hasFile('profile_photo')) {
            $file = $request->file('profile_photo');
            $fileName = Str::uuid() . '.' . $file->getClientOriginalExtension();
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
        return response()->json(['message' => 'register successful'], 201);
    }
    public function login(LoginReguest $request)
    {
        if (!Auth::attempt($request->only('phone_number', 'password')))
            return response()->json(['message' => 'invalid number or password'], 401);
        $user = User::where('phone_number', $request->phone_number)->FirstOrFail();
        return response()->json([
            'message' => 'login successful',
            'user' => $user
        ], 200);
    }
}
