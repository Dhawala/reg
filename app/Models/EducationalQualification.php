<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationalQualification extends Model
{
    use HasFactory;

    public function applicant(){
        return $this->belongsTo(Applicant::class);
    }

    public function degree_class(){
        return $this->belongsTo(DegreeClass::class);
    }
}
