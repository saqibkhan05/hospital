<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use App\Models\Doctor;
use App\Models\Hospital;
use App\Models\Specialist;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $hospital = Hospital::count();
        $Doctor = Doctor::count();
        $Specialist = Specialist::count();
        $Disease = Disease::count();
        return view("admin.dashboard")->with("hospital", $hospital)->with("Doctors", $Doctor)->with("Specialist", $Specialist)->with("Disease", $Disease);
    }


}
