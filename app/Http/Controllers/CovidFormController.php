<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\CovidForm;
use App\Mail\CovidFormsMail;

class CovidFormController extends Controller
{
    public function store(Request $request)
    {



        $covidForm = new CovidForm();
        $covidForm->fullName = $request->input('fullName');
        $covidForm->lastName = $request->input('lastName');
        $covidForm->birthday = $request->input('birthday');
        // $covidForm->categories = $request->input('categories');
        $covidForm->physical_contact = $request->input('physical_contact');
        $covidForm->isolate_detail = $request->input('isolate_detail');
        $covidForm->test_result = $request->input('test_result');
        $covidForm->categories = implode(',', $request->input('categories')); // Convert array to string
        $covidForm->save();


        $name = $request->input('fullName') . ' ' . $request->input('lastName');
        $birthday = $request->input('birthday');
        $categories = $request->input('categories');
        $physical_contact = $request->input('physical_contact');
        $isolate_detail = $request->input('isolate_detail');
        $test_result = $request->input('test_result');

        $Admin = config('mails.mails.company');
        Mail::to($Admin)->send(new CovidFormsMail($name, $birthday, $categories, $physical_contact, $isolate_detail, $test_result));

        return redirect()->back()->with('success', 'Form Submitted Successfully');
    }
}
