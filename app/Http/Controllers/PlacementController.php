<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use App\Models\Employee;
use App\Models\Placement;
use Illuminate\Http\Request;

class PlacementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employee = Employee::with('activite')->get();
        $activites = Activite::all();
        $placements = Placement::all();
        return view('placement.index', compact('employee','activites','placements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $placements = Placement::create($request->all());
        
        return redirect()->route('placement.index');
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
        $deletePlacement = Placement::findOrFail($id);
        $deletePlacement->delete();
        return redirect()->route('placement.index');
    }
}
