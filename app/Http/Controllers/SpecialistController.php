<?php

namespace App\Http\Controllers;

use App\Models\Specialist;
use Illuminate\Http\Request;

class SpecialistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $specialists = Specialist::withCount('doctors')->get();
        return view("admin.specialist.index")->with("specialists", $specialists);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view("admin.specialist.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the input
        $validatedData = $request->validate([
            "name" => 'required|string|max:255',
        ]);

        // If validation passes, store user
        Specialist::create([
            'name' => $validatedData['name'],
        ]);

        // Redirect or send response
        return redirect()->route('specialist.index')->with('created_success', 'Specialist created successfully');
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
