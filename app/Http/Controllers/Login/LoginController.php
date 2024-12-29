<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    //index
    public function index()
    {
        return view('login.login');
    }
    //login user account by number_phone and password
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'number_phone' => 'required|regex:/^0[0-9]{9}$/', 
            'password' => 'required|min:8', 
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422); 
        }

        $credentials = [
            'number_phone' => $request->input('number_phone'),
            'password' => $request->input('password'),
        ];

        if (Auth::attempt($credentials)) {
            session()->flash('success_message', 'Đăng nhập thành công!');
            return response()->json([
                'success' => true,
                'redirect_url' => route('home.index') 
            ]);
        }

        return response()->json([
            'errors' => [
                'number_phone' => ['Số điện thoại hoặc mật khẩu không đúng.']
            ]
        ], 422);
    }
}
