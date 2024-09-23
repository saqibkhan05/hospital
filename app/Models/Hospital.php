<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "address",
        "city",
        "state",
        "pincode",
    ];

    public function doctors()
    {
        return $this->belongsToMany(Doctor::class, 'doctor_hospital');
    }

    public function diseases()
    {
        return $this->belongsToMany(Disease::class, 'hospital_disease');
    }
}
