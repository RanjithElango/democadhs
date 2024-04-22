<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\ContactForms;
use App\Mail\ContactFormsMail;

class ContactFormController extends Controller
{
    public function store(Request $request)
    {

        $contactForm = new ContactForms();
        $contactForm->fullName = $request->input('fullName');
        $contactForm->lastName = $request->input('lastName');
        $contactForm->email = $request->input('email');
        $contactForm->message = $request->input('messages');
        $contactForm->save();

        // Pass individual variables to the view, not the entire object
        $name = $request->input('fullName') . ' ' . $request->input('lastName');
        $email = $request->input('email');
        $messages = $request->input('messages');

        $Admin = config('mails.mails.company');
        Mail::to($Admin)->send(new ContactFormsMail($name, $email, $messages));

        // $fromadmin = config('mails.mails.admin');

        return redirect()->back()->with('success', 'Form Submitted Successfully');
    }
}
