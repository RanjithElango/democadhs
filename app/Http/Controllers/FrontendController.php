<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function home()
    {
        return view('front-end.index');
    }

    public function covid_screen()
    {
        return view('front-end.covid-screening');
    }

    public function doctor()
    {
        return view('front-end.your-doctor');
    }

    public function speciality_service()
    {
        return view('front-end.speciality-service');
    }



    public function lab_request()
    {
        return view('front-end.lab-request');
    }
    public function rx_refill()
    {
        $countries = DB::table('countrylists')->select('name')->pluck('name');

        return view('front-end.rx-refill' , compact('countries'));
    }
    public function patient_support()
    {
        return view('front-end.patient-support');
    }
    public function forms()
    {
        return view('front-end.forms');
    }
    public function cv()
    {
        return view('front-end.curriculum-vitae');
    }


    public function diabetes()
    {
        return view('front-end.service.diabetes');
    }
    public function thyroid()
    {
        return view('front-end.service.thyroid');
    } public function pcos()
    {
        return view('front-end.service.pcos');
    } public function ostoporosis()
    {
        return view('front-end.service.ostoporosis');
    } public function menopause()
    {
        return view('front-end.service.menopause');
    } public function pituitary()
    {
        return view('front-end.service.pituitary');
    } public function testostrone()
    {
        return view('front-end.service.testostrone');
    } public function transgender()
    {
        return view('front-end.service.transgender');
    } public function adrenal()
    {
        return view('front-end.service.adrenal');
    }
    public function service()
    {
        return view('front-end.service');
    }

}
