<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        Mail::raw('Thanks for contacting us, we will get back to your query as soon as possible.', function ($message){
            $message->to(request('email'))
                ->subject('Hello from Stadium Tracker');
        });

        if ($file = $request->file('file')){
            $name = $file->getClientOriginalName();
            $file->move('files', $name);
        }


        return redirect('/contact')
            ->with('message','Email Sent!');
    }
}
