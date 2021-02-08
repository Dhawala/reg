<?php

namespace App\Http\Controllers;

use App\Mail\ApplicantConfermationMail;
use App\Models\Applicant;
use Faker\Factory as Faker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ApplicantController extends Controller
{
    public function personal(){
        return view('personal.create');
    }

    public function personal_save(Request $request){

        $this->validate($request,[
            'surname'=>'required|max:50',
            'firstname'=>'required|max:150',
            'nic_number'=>['required','max:12','regex:^([0-9]{9}[x|X|v|V]|[0-9]{12})$^'],
            'phone_number'=>['required','max:15','regex:^(\+\d{1,3}[- ]?)?\d{10}$^'],
            'email'=>'required|max:60|email|unique:applicants',
        ]);

        $applicant = new Applicant();
        $applicant->surname = $request->surname;
        $applicant->firstname = $request->firstname;
        $applicant->nic_number = $request->nic_number;
        $applicant->phone_number = $request->phone_number;
        $applicant->email = $request->email;
        $applicant->reference_key = sha1($request->email.Faker::create()->sentence(8));
        $applicant->save();
            Mail::to($applicant->email)->send(new ApplicantConfermationMail($applicant));
            return redirect("/firsttimeuser/{$applicant->reference_key}/");


    }
}
