<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use App\Models\Doctor;
use App\Models\Hospital;
use App\Models\Specialist;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hospital = Hospital::withCount('doctors')->withCount('diseases')->get();
        return view("admin.hospital.index")->with("hospitals", $hospital);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $diseases = Disease::all();
        $doctors = Doctor::all();
        return view("admin.hospital.create")->with("diseases", $diseases)->with("doctors", $doctors);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the input
        $validatedData = $request->validate([
            "name" => 'required|string|max:255',
            "address" => "required|string|max:255",
            "city" => "required|string|max:50",
            "state" => "required|string|max:50",
            "pincode" => "required|string|max:50",
        ]);

        // If validation passes, store user
        $Hospital = Hospital::create([
            'name' => $validatedData['name'],
            'address' => $validatedData['address'],
            'city' => $validatedData['city'],
            'state' => $validatedData['state'],
            'pincode' => $validatedData['pincode'],
        ]);

        $Hospital->diseases()->attach($request->disease);
        $Hospital->doctors()->attach($request->doctor);
        $Hospital->save();


        // Redirect or send response
        return redirect()->route('hospital.index')->with('created_success', 'Doctor created successfully');
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
