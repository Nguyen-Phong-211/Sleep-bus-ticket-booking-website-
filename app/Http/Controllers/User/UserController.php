<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendOtpMail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //index
    public function index()
    {
        return view('home.index');
    }
    //view forgot password
    public function showViewforgotPassword()
    {
        return view('misspassword.misspassword');
    }
    //forgot password
    public function forgotPassword(Request $request)
    {
        $request->validate([
            'emailMisspassword' =>'required|email',
            'passwordMisspassword' => 'required|min:8',
        ]);

        $user = User::where('email', $request->emailMisspassword)->first();
        if (!$user) {
            return redirect()->back()->with('error', 'Email không tồn tại');
        }
        $otp = random_int(100000, 999999);
        Session::put('email', $request->email);
        Mail::to($request->emailMisspassword)->send(new SendOtpMail($otp));

        return redirect()->route('authu.showViewMisspassword')->with('success', 'Mã OTP đã được gửi đến email của bạn.');
    }
    //save new password
    public function saveNewPassword(Request $request)
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
        $email = Session::get('email', $request->email);

        if($inputOtp == $sessionOtp)
        {
            $user = User::where('email', $email)->first();
            $newPassword = $request->password;
            $user->password = Hash::make($newPassword);
            $user->save();
            Auth::login($user);
            Session::forget(['otp', 'email']);
            return redirect()->route('login.index')->with('success_change_password', 'Mật khẩu của bạn đã được thay đổi thành công');
        }
    }
    //update information
    public function updateInformation(Request $request)
    {
        $request->validate([
            'fullNameUpdate' => 'string',
            'emailUpdate' => 'email|unique:users,email,' . Auth::id() . ',user_id',
            'numberPhoneUpdate' => 'digits:10|unique:users,number_phone,' . Auth::id() . ',user_id',
            'inputNumberPhonePrepare' => 'nullable|digits:10',
            'inputAddressUpdate' => 'nullable',
            'avatarUpdate' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = User::find(Auth::id());
        $user->fullname = $request->fullNameUpdate;
        $user->email = $request->emailUpdate;
        $user->number_phone = $request->numberPhoneUpdate;
        $user->backup_phone_number = $request->inputNumberPhonePrepare;
        $user->address = $request->inputAddressUpdate;

        if ($request->hasFile('avatarUpdate')) {
            $file = $request->file('avatarUpdate');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('assets/img/user/'), $filename);
            $user->avatar = $filename;
        }

        $user->save();

        return redirect()->back()->with('success', 'Cập nhật thông tin thành công.');
    }
    //update password
    public function updatePassword(Request $request)
    {
        $request->validate([
            'passwordCurrent' => 'required|min:8',
            'newPassword' => 'required|string|min:8|confirmed',
        ]);

        if (!Hash::check($request->passwordCurrent, Auth::user()->password)) {
            // return redirect()->back()->withErrors(['passwordCurrent' => 'Mật khẩu hiện tại không đúng.']);
            return response()->json(['status' => 'error', 'message' => 'Mật khẩu hiện tại không đúng.'], 400);
        }

        $user = Auth::user();
        $user->password = Hash::make($request->newPassword);
        if ($user instanceof User) {
            $user->save();
        }
        // return redirect()->back()->with('success', 'Mật khẩu đã được cập nhật thành công.');
        return response()->json(['status' => 'success', 'message' => 'Mật khẩu đã được cập nhật thành công.']);
    }
}
