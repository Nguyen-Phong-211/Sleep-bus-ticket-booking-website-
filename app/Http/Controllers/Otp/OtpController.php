<?php

namespace App\Http\Controllers\Otp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class OtpController extends Controller
{
    //index
    public function index()
    {
        return view('authu.authu');
    }
    //verifyOtp
    public function verifyOtp(Request $request)
    {
        $request->validate([
            'otp1' => 'required|numeric|digits:1',
            'otp2' => 'required|numeric|digits:1',
            'otp3' => 'required|numeric|digits:1',
            'otp4' => 'required|numeric|digits:1',
            'otp5' => 'required|numeric|digits:1',
            'otp6' => 'required|numeric|digits:1',
        ]);
    
        $inputOtp = $request->otp1 . $request->otp2 . $request->otp3 . $request->otp4 . $request->otp5 . $request->otp6;
        $sessionOtp = Session::get('otp');
        $email = Session::get('email');
        $phone = Session::get('number_phone');
        $password = Session::get('password');
        $avatar = "profile.png";
        $role_id = 1;
    
        if ($inputOtp == $sessionOtp) {

            $user = new User();
            $user->email = $email;
            $user->number_phone = $phone;
            $user->password = Hash::make($password); 
            $user->avatar = $avatar;
            $user->role_id = $role_id;
            $user->save();

            Auth::login($user);
            
            Session::forget(['otp', 'email', 'number_phone', 'password']); 
            sleep(2);
            return redirect()->route('home.index')->with('success_message', 'Tài khoản của bạn đã được tạo thành công!');
        } else {
            return redirect()->back()->with('error', 'OTP không hợp lệ! Vui lòng nhập lại.');
        }
    }
    public function showViewMisspassword()
    {
        return view('authu.misspassword');
    }

}
