<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DegreeClass extends Model
{
    use HasFactory;

    public function educational_qualification(){
        return $this->hasMany(EducationalQualification::class);
    }
}
