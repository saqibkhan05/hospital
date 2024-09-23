<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use App\Models\Doctor;
use App\Models\Hospital;
use App\Models\Specialist;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = Doctor::withCount('specialists')->withCount('hospitals')->withCount('diseases')->get();
        return view("admin.doctor.index")->with("doctors", $doctors);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $specialists = Specialist::all();
        $diseases = Disease::all();
        $hospitals = Hospital::all();
        return view("admin.doctor.create")->with("specialists", $specialists)->with("diseases", $diseases)->with("hospitals", $hospitals);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the input
        $validatedData = $request->validate([
            "name" => 'required|string|max:255',
            "experience" => "required|numeric|gt:0",
        ]);

        // If validation passes, store user
        $doctor = Doctor::create([
            'name' => $validatedData['name'],
            'experience' => $validatedData['experience'],
        ]);

        $doctor->specialists()->attach($request->specialist);
        $doctor->diseases()->attach($request->disease);
        $doctor->hospitals()->attach($request->hospital);
        $doctor->save();


        // Redirect or send response
        return redirect()->route('doctor.index')->with('created_success', 'Doctor created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
