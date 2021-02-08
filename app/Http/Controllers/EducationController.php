<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\DegreeClass;
use App\Models\EducationalQualification;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function education($reference_key)
    {
        $applicant = Applicant::where(['reference_key' => $reference_key])
            ->with('educational_qualification')->first();
        $classes = DegreeClass::all();

        return view('education.create', compact('applicant', 'classes'));
    }

    public function education_save(Request $request, $reference_key)
    {
        $this->validate($request, [
            'degree_title' => 'max:100|required',
            'class_id' => 'numeric|required',
            'university_name' => 'required|max:100',
            'graduation_date' => 'date|required',
        ]);

        $applicant = Applicant::where(['reference_key' => $reference_key])->first();

        $eq = new EducationalQualification();
        $eq->degree_title = $request->degree_title;
        $eq->class_id = $request->class_id;
        $eq->university_name = $request->university_name;
        $eq->graduation_date = $request->graduation_date;

        $applicant->educational_qualification()->save($eq);

        return redirect('/education/' . $applicant->reference_key)->with('success','Saved successfully');

    }

    public function education_delete($id)
    {
        $education_qualification = EducationalQualification::find($id)->with('applicant')->first();
        $reference_key = $education_qualification->applicant->reference_key;
        $education_qualification->delete();
        return redirect("/education/{$reference_key}")->with('success', 'Successfully deleted');

    }
}
