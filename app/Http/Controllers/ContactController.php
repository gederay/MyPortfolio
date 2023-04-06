<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function __invoke(ContactRequest $request)
    {
        // dd($request->name, $request->email, $request->body);

        Mail::to($request->email)->send(new ContactMail($request->name, $request->email, $request->body));

        return redirect()->back();
    }
}
