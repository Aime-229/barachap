<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use Illuminate\Http\Request;

class ActiviteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activite = Activite::all();
        return view('activite.index', compact('activite'));
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
        $data = $request->validate([
            'activite' => 'bail|string|required'
        ]);

        $activites = Activite::create($data);
        return to_route('activites.index');
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
        $activite = Activite::find($id);
        return view('activite.edit', compact('activite'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'activite' => 'bail|string|required'
        ]);

        $updateActivites = Activite::find($id);
        $updateActivites ->update($data);
        return redirect()->route('activites.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $activite = Activite::findOrFail($id);
        $activite->delete();
        return redirect()->route('activites.index');
    }
}
