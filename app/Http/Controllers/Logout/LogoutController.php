<?php

namespace App\Http\Controllers\Logout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    //logout
    public function logout()
    {
        Auth::logout();
        session()->flush(); 
        session()->flash('success_logout_message', 'You have successfully logged out!');
        sleep(1);
        return redirect()->route('home.index');
    }
}
