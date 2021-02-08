<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function personal(){
        return view('personal.create');
    }

    public function personal_save(Request $request){

        $this->validate($request,[
            'surname'=>'required|max:60',
            'firstname'=>'required|max:150',
            'nic_number'=>['required','max:12','regex:^([0-9]{9}[x|X|v|V]|[0-9]{12})$^'],
            'phone_number'=>['required','max:12','regex:^(\+\d{1,3}[- ]?)?\d{10}$^'],
        ]);

    }
}
