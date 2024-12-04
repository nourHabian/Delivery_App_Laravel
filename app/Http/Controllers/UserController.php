<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginReguest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(RegisterRequest $req){
        User::create([
         'first_name'=>$req->first_name,
            'last_name'=>$req->last_name,
            'phone_number'=>$req->phone_number,
            'location'=>$req->location,
            'image_path'=>$req->image_path,
            'password'=>Hash::make($req->password)
        ]);
        return response()->json(['message'=>'register successful'],200);

    }
    public function login(LoginReguest $req){
        if(!Auth::attempt($req->only('phone_number','password')))
        return response()->json(['message'=>'invalid number or password'],401);
        $user=User::where('phone_number',$req->phone_number)->FirstOrFail();
        return response()->json(
            [
                'message'=>'login successful',
                'user'=>$user
            ]
        ,201);
    }
}
