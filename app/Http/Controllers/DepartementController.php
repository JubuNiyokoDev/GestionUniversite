<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use App\Models\Faculite;
use Illuminate\Http\Request;

class DepartementController extends Controller
{
    // Afficher tous les départements
    public function index()
    {
        $departements = Departement::with('faculite')->get();
        return view('departements.index', compact('departements'));
    }

    // Afficher le formulaire de création
    public function create()
    {
        $faculites = Faculite::all();
        return view('departements.create', compact('faculites'));
    }

    // Enregistrer un nouveau département
    public function store(Request $request)
    {
        $request->validate([
            'nomd' => 'required',
            'coded' => 'required|unique:departements',
            'faculite_id' => 'required'
        ]);

        Departement::create($request->all());
        return redirect()->route('departements.index')->with('success', 'Département créé avec succès');
    }

    // Afficher un département spécifique
    public function show(Departement $departement)
    {
        return view('departements.show', compact('departement'));
    }

    // Afficher le formulaire d'édition
    public function edit(Departement $departement)
    {
        $faculites = Faculite::all();
        return view('departements.edit', compact('departement', 'faculites'));
    }

    // Mettre à jour un département
    public function update(Request $request, Departement $departement)
    {
        $request->validate([
            'nomd' => 'required',
            'coded' => 'required|unique:departements,coded,' . $departement->id,
            'faculite_id' => 'required'
        ]);

        $departement->update($request->all());
        return redirect()->route('departements.index')->with('success', 'Département mis à jour avec succès');
    }

    // Supprimer un département
    public function destroy(Departement $departement)
    {
        $departement->delete();
        return redirect()->route('departements.index')->with('success', 'Département supprimé avec succès');
    }
}
