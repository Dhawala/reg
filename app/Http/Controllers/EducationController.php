<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function education($reference_key){
        $applicant = Applicant::where(['reference_key'=>$reference_key])->first();
        return view('education.create',compact('applicant'));
    }

    public function education_save(){

    }
}
