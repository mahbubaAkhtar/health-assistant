<?php

namespace App\Http\Controllers\UserPortal;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function showContact()
    {
        $user = auth()->user();
        return view('UserPortal/Contact/contact_us' ,['user' =>$user]);
    }

    public function contactStore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);


        ContactUs::query()->create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);


//        return redirect('/route name');
        return redirect('/contact_us')
        ->with('message', 'Record added successfully!');
    }
}
