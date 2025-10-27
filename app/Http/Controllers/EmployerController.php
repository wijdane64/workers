<?php

namespace App\Http\Controllers;

use App\Models\employer;
use App\Http\Requests\StoreemployerRequest;
use Illuminate\Http\Request;


class EmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $employers = Employer::all();
    return view('employer',  ['employers' => $employers]);
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    return view('Ajouter');
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'prenom' => 'required|string|max:255',
            'nom'    => 'required|string|max:255',
            'email'  => 'required|email|unique:employers,email',
            'poste'  => 'required|string|max:255',
        ]);

        Employer::create($validated);

        return redirect()->route('employer.index')->with('success', 'Employé ajouté avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employer $employer)
{
    return view('détail', ['employer' => $employer]);
}
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employer $employer)
{
    return view('Modifier', ['employer' => $employer]);
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, employer $employer)
    {
        $validated = $request->validate([
            'prenom' => 'required|string|',
            'nom'    => 'required|string|',
            'email'  => 'required|email|unique:employers,email,'.$employer->id,
            'poste'  => 'required|string|',
        ]);

        $employer->update($validated);

        return redirect()->route('employer.index')->with('success', 'Employé mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employer $employer)
{
    $employer->delete();
    return redirect()->route('employer.index')->with('success', 'Employé supprimé avec succès.');
}
}
