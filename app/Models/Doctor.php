<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'experience'
    ];

    public function specialists()
    {
        return $this->belongsToMany(Specialist::class, 'doctor_specility');
    }

    public function hospitals()
    {
        return $this->belongsToMany(Hospital::class, 'doctor_hospital');
    }
    public function diseases()
    {
        return $this->belongsToMany(Disease::class, 'doctor_disease');
    }
}
