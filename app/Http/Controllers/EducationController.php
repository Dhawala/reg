<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function education(){
        return view('education.create');
    }

    public function education_save(){

    }
}
