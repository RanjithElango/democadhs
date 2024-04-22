<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\RxRefill;
use App\Mail\RxRefillMail;

class RxRefillController extends Controller
{
    //
    public function store(Request $request)
    {

        $rxrefillForm = new RxRefill();
        $rxrefillForm->fullName = $request->input('fullName');
        $rxrefillForm->lastName = $request->input('lastName');
        $rxrefillForm->birthday = $request->input('birthday');
        $rxrefillForm->pharmacy_name = $request->input('pharmacy_name');
        $rxrefillForm->country = $request->input('country');
        $rxrefillForm->address_first = $request->input('address_first');
        $rxrefillForm->address_second = $request->input('address_second');
        $rxrefillForm->city = $request->input('city');
        $rxrefillForm->state = $request->input('state');
        $rxrefillForm->zip = $request->input('zip');
        $rxrefillForm->medication = $request->input('medication');
        $rxrefillForm->supplies = $request->input('supplies');
        $rxrefillForm->save();


        $name = $request->input('fullName') . ' ' . $request->input('lastName');
        $birthday = $request->input('birthday');
        $pharmacy_name = $request->input('pharmacy_name');
        $country = $request->input('country');
        $address_first = $request->input('address_first');
        $address_second = $request->input('address_second');
        $city = $request->input('city');
        $state = $request->input('state');
        $zip = $request->input('zip');
        $medication = $request->input('medication');
        $supplies = $request->input('supplies');

        $Admin = config('mails.mails.company');
        Mail::to($Admin)->send(new RxRefillMail($name,$birthday ,$pharmacy_name ,$country ,$address_first,$address_second, $city ,$state ,$zip,$medication,$supplies));

        return redirect()->back()->with('success', 'Form Submitted Successfully');

    }
}
