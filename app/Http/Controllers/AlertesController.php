<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use App\Models\Alertes;
use Illuminate\Http\Request;

class AlertesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alertes = Alertes::all();
        return view('alertes.index', compact('alertes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $activites = Activite::all();
        return view('alertes.create',compact('activites'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'prenom' => 'bail|string|required',
            'numero' => 'bail|integer|required',
            'message' => 'bail|string',
            'activite_id' => 'bail|required'
        ]);

        $alertes = Alertes::create($data);

        return view('alertes.message');
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

    public function message()
    {
        return view('alertes.message');
    }
}
