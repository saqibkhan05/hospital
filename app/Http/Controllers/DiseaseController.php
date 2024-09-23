<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use Illuminate\Http\Request;

class DiseaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $diseases = Disease::withCount('doctors')->withCount('hospitals')->get();
        return view('admin.disease.index')->with('diseases', $diseases);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.disease.create');
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
        Disease::create([
            'name' => $validatedData['name'],
        ]);

        // Redirect or send response
        return redirect()->route('disease.index')->with('created_success', 'Disease created successfully');
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
