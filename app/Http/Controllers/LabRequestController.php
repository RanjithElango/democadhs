<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\LabRequest;
use App\Mail\LabRequestsMail;

class LabRequestController extends Controller
{
    //
    public function store(Request $request)
    {



        $labrequestForm = new LabRequest();
        $labrequestForm->fullName = $request->input('fullName');
        $labrequestForm->lastName = $request->input('lastName');
        $labrequestForm->test_result = $request->input('test_result');
        $labrequestForm->birthday = $request->input('birthday');
        $labrequestForm->lab_choice = $request->input('lab_choice');
        $labrequestForm->email = $request->input('email');
        $labrequestForm->phone = $request->input('phone');
        $labrequestForm->save();


        $name = $request->input('fullName') . ' ' . $request->input('lastName');
        $test_result = $request->input('test_result');
        $birthday = $request->input('birthday');
        $lab_choice = $request->input('lab_choice');
        $email = $request->input('email');
        $phone = $request->input('phone');

        $Admin = config('mails.mails.company');
        Mail::to($Admin)->send(new LabRequestsMail($name, $test_result,$birthday,$lab_choice, $email, $phone));

        return redirect()->back()->with('success', 'Form Submitted Successfully');
    }
}
