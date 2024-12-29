<?php

namespace App\Http\Controllers\Signup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendOtpMail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class SignupController extends Controller
{
    //index
    public function index()
    {
        return view('signup.signup');
    }
    // stroge
    public function store(Request $request)
    {

        $existingUserEmail = User::where('email', $request->email)->exists();
        $existingUserPhone = User::where('number_phone', $request->number_phone)->exists();

        if ($existingUserEmail || $existingUserPhone) {
            return redirect()->route('signup.index')->with('error', 'Email hoặc số điện thoại này đã tồn tại. Vui lòng chọn email hoặc số điện thoại khác.');
        }

        $request->validate([
            'email' => 'required|email|unique:users,email',
            'number_phone' => 'required|string|max:10',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $otp = random_int(100000, 999999);

        Mail::to($request->email)->send(new SendOtpMail($otp));

        Session::put('otp', $otp);
        Session::put('email', $request->email);
        Session::put('number_phone', $request->number_phone);
        Session::put('password', $request->password);

        return redirect()->route('authu.index')->with('success', 'Mã OTP đã được gửi đến email của bạn.');
    }
}
