<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
    ];

    public function doctors()
    {
        return $this->belongsToMany(Doctor::class, 'doctor_disease');
    }

    public function hospitals()
    {
        return $this->belongsToMany(Hospital::class, 'hospital_disease');
    }

}
