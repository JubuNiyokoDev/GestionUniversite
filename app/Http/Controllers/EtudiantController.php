<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    // Afficher tous les étudiants
    public function index()
    {
        $etudiants = Etudiant::all();
        return view('etudiants.index', compact('etudiants'));
    }

    // Afficher le formulaire de création
    public function create()
    {
        return view('etudiants.create');
    }

    // Enregistrer un nouvel étudiant
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'genre' => 'required',
            'date_de_naissance' => 'required|date',
            'note' => 'required|numeric'
        ]);

        Etudiant::create($request->all());
        return redirect()->route('etudiants.index')->with('success', 'Étudiant créé avec succès');
    }

    // Afficher un étudiant spécifique
    public function show(Etudiant $etudiant)
    {
        return view('etudiants.show', compact('etudiant'));
    }

    // Afficher le formulaire d'édition
    public function edit(Etudiant $etudiant)
    {
        return view('etudiants.edit', compact('etudiant'));
    }

    // Mettre à jour un étudiant
    public function update(Request $request, Etudiant $etudiant)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'genre' => 'required',
            'date_de_naissance' => 'required|date',
            'note' => 'required|numeric'
        ]);

        $etudiant->update($request->all());
        return redirect()->route('etudiants.index')->with('success', 'Étudiant mis à jour avec succès');
    }

    // Supprimer un étudiant
    public function destroy(Etudiant $etudiant)
    {
        $etudiant->delete();
        return redirect()->route('etudiants.index')->with('success', 'Étudiant supprimé avec succès');
    }
}
