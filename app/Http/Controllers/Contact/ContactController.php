<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailContact;
use Illuminate\Support\Facades\Auth;
use App\Models\Contact;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    //
    public function index()
    {
        return view('contact.contact');
    }
    //store
    public function store(Request $request)
    {
        if(Auth::check())
        {
            $contact = new Contact();
            $contact->user_id = Auth::user()->user_id;
            $contact->content = $request->content;
            $contact->contact_date = now();
            $contact->save();

            $validatedData = [
                'emailContact' => Auth::user()->email,
                'number_phoneContact' => Auth::user()->number_phone,
                'content' => $request->content
            ];
    
            Mail::to('phongnguyen.050503@gmail.com')->send(new EmailContact($validatedData));

            session()->flash('status', 'success');
            session()->flash('message', 'Cảm ơn bạn đã liên hệ. Chúng tôi sẽ phản hồi sớm nhất.');
            return redirect()->back()->with('success', 'Cảm ơn bạn đã liên hệ. Chúng tôi sẽ phản hồi sớm nhất.');
        }
        else
        {
            $validatedData = $request->validate([
            'emailContact' =>'required|email',
            'number_phoneContact' =>'required|digits:10',
            'content' =>'required'
            ]);

            Mail::to('phongnguyen.050503@gmail.com')->send(new EmailContact($validatedData));

            session()->flash('status', 'success');
            session()->flash('message', 'Cảm ơn bạn đã liên hệ. Chúng tôi sẽ phản hồi sớm nhất.');
            return redirect()->back()->with('success', 'Cảm ơn bạn đã liên hệ. Chúng tôi sẽ phản hồi sớm nhất.');
        }
    }
}
