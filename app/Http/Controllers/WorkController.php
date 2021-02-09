<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\WorkExperience;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function work($reference_key)
    {
        $applicant = Applicant::where(['reference_key' => $reference_key])
            ->with('work_experience')->first();
        return view('work.create', compact('applicant'));
    }

    public function work_save(Request $request, $reference_key)
    {
        $this->validate($request, [
            'company_name' => 'max:100|required',
            'position' => 'max:60|required',
            'from' => 'date|required',
            'to' => 'date|required',
        ]);

        $work = new WorkExperience();
        $work->company_name = $request->company_name;
        $work->position = $request->position;
        $work->from = $request->from;
        $work->to = $request->to;

        Applicant::where(['reference_key' => $reference_key])
            ->with('work_experience')
            ->first()
            ->work_experience()
            ->save($work);

        return redirect('/work/'.$reference_key)
            ->with('success','Saved successfully');

    }

    public function work_delete($id)
    {
        $reference_key = WorkExperience::find($id)->with('applicant')->first()->applicant->reference_key;

        WorkExperience::find($id)->first()->delete();
        return redirect("/work/{$reference_key}")->with('success', 'Successfully deleted');

    }

}
