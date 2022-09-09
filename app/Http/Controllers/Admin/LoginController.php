<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function getLogin()
    {
        return view('admin.login');
    }
    
    public function checkLogin(Request $request)
    {
        $checkLogin = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if(Auth::attempt($checkLogin)){
            
            $token = Str::random(50);
            (Auth::user())->update(['api_token' => $token]);
            return response()->json([
                'user' => Auth::user(),
                'token' => $token,
                'message' => 'success',
                'code' => 200,
            ]);
            dd($token);
        }else{
            return response()->json([
                'code' => 403,
                'message' => 'Username password does not match'
            ]);
        }
    }

    public function logout()
    {
        Auth::user()->tokens->each(function($token) {
            $token->revoke();
        });
        return response()->json([
            'code' => 200,
            'message' => 'logout'
        ]);
    }
    
   
}