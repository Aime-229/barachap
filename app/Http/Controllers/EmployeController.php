<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        $activites = Activite::all();
        return view('employee.index', compact('employees','activites'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $activites = Activite::all();
        return view('employee.create', compact('activites'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nom' => 'bail|string|required',
            'prenom' => 'bail|string|required',
            'profil' => 'bail|required|image|mimes:jpeg,png,jpg',
            'activite_id' => 'bail|required|string',
            'salaire' => 'bail|required|numeric',
            'datenaissance' => 'bail|required|date',
            'residence' => 'bail|required|string',
            'numero' => 'bail|string|required',
            'personneacontacter' => 'bail|string|required',
            'numeropersonne' => 'bail|string|required'

        ]);

        if ($request->hasFile('profil')) {
            $imagePath = $request->file('profil')->store('images', 'public');
            $data['profil'] = $imagePath;
        
            $newEmployee = Employee::create($data);
        }


        return redirect()->route('employee.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employeesDetails = Employee::find($id);
        return view('employee.show', compact('employeesDetails'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employees = Employee::find($id);
        return view('employee.edit', compact('employees'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'nom' => 'bail|string|required',
            'prenom' => 'bail|string|required',
            'profil' => 'bail|required|image|mimes:jpeg,png,jpg',
            'activite_id' => 'bail|required|string',
            'salaire' => 'bail|required|numeric',
            'datenaissance' => 'bail|required|date',
            'residence' => 'bail|required|string',
            'numero' => 'bail|string|required',
            'personneacontacter' => 'bail|string|required',
            'numeropersonne' => 'bail|string|required'

        ]);

        if ($request->hasFile('profil')) {
            $imagePath = $request->file('profil')->store('images', 'public');
            $data['profil'] = $imagePath;
        
            $updateEmployee = Employee::find($id);
            $updateEmployee ->update($data);
            return redirect()->route('employee.index');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleteEmployee = Employee::findOrFail($id);
        $deleteEmployee->delete();
        return redirect()->route('employee.index');
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'nom' => 'bail|string|required',
            'prenom' => 'bail|string|required',
            'profil' => 'bail|required|image|mimes:jpeg,png,jpg',
            'activite_id' => 'bail|required|string',
            'salaire' => 'bail|required|numeric',
            'datenaissance' => 'bail|required|date',
            'residence' => 'bail|required|string',
            'numero' => 'bail|string|required',
            'personneacontacter' => 'bail|string|required',
            'numeropersonne' => 'bail|string|required'

        ]);

        if ($request->hasFile('profil')) {
            $imagePath = $request->file('profil')->store('images', 'public');
            $data['profil'] = $imagePath;
        
            $newEmployee = Employee::create($data);
        }


        return redirect()->route('message');
    }

    public function message()
    {
        return view('employee.message');
    }

}
