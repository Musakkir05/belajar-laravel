<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    public function classroom()
    {
        return $this->hasOne(ClassRoom::class, 'dosen_id', 'id');
    }
}
