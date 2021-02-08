<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    public function educational_qualification(){
        return $this->hasMany(EducationalQualification::class);
    }

    public function work_experience(){
        return $this->hasMany(WorkExperience::class);
    }
}
