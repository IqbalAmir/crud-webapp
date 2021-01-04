<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Mail\ContactAdmin;
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
        $query=$request;

        Mail::to(request('email'))
            ->send(new Contact($query));

        if ($file = $request->file('file')){
            $name = $file->getClientOriginalName();
            $file->move('files', $name);
        }

        return redirect('/contact')
            ->with('success_message','Email Sent!');
    }
}
