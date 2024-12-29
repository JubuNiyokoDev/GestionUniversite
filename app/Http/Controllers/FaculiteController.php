<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculite;

class FaculiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faculites = Faculite::all();
        return view('faculites.index', compact('faculites'));
    }

    // Afficher le formulaire de création
    public function create()
    {
        return view('faculites.create');
    }

    // Enregistrer une nouvelle faculté
    public function store(Request $request)
    {
        $request->validate([
            'nomf' => 'required',
            'codef' => 'required|unique:faculites'
        ]);

        Faculite::create($request->all());
        return redirect()->route('faculites.index')->with('success', 'Faculté créée avec succès');
    }

    // Afficher une faculté spécifique
    public function show(Faculite $faculite)
    {
        return view('faculites.show', compact('faculite'));
    }

    // Afficher le formulaire d'édition
    public function edit(Faculite $faculite)
    {
        return view('faculites.edit', compact('faculite'));
    }

    // Mettre à jour une faculté
    public function update(Request $request, Faculite $faculite)
    {
        $request->validate([
            'nomf' => 'required',
            'codef' => 'required|unique:faculites,codef,' . $faculite->id
        ]);

        $faculite->update($request->all());
        return redirect()->route('faculites.index')->with('success', 'Faculté mise à jour avec succès');
    }

    // Supprimer une faculté
    public function destroy(Faculite $faculite)
    {
        $faculite->delete();
        return redirect()->route('faculites.index')->with('success', 'Faculté supprimée avec succès');
    }
}
