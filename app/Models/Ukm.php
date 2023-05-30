<?php

namespace App\Models;

use App\Models\Ukm as ModelsUkm;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ukm extends Model
{
    use HasFactory;

    public function students()
    {
        return $this->belongsToMany(Student::class, 'student_ukm', 'ukm_id', 'student_id');
    }
}
