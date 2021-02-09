<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;

class FirstTimeUserController extends Controller
{
    function firsttimeuser($referance_key){
        $applicant = Applicant::where(['reference_key'=>$referance_key])->first();
        return view('firsttimeuser',compact('applicant'));
    }

    function done($referance_key){
        $applicant = Applicant::where(['reference_key'=>$referance_key])->first();
        return view('done',compact('applicant'));
    }
}
