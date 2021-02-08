<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function work($reference_key)
    {
        $applicant = Applicant::where(['reference_key' => $reference_key])
            ->with('work_experience')->first();
dd($applicant);
        return view('work.create', compact('applicant'));
    }

    public function work_save(Request $request, $reference_key)
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

        return redirect('/work/' . $applicant->reference_key)->with('success','Saved successfully');

    }

    public function work_delete($id)
    {
        return redirect("/work/{$reference_key}")->with('success', 'Successfully deleted');

    }

}
