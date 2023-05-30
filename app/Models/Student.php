<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nama', 'stambuk', 'gender', 'class_id', 'image'
    ];
    public function class()
    {
        return $this->belongsTo(ClassRoom::class);
    }

    public function ukm()
    {
        return $this->belongsToMany(Ukm::class, 'student_ukm', 'student_id', 'ukm_id');
    }
}
