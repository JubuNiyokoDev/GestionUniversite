<?php

namespace App\Http\Controllers;

use App\Models\Inscription;
use App\Models\Classe;
use App\Models\Etudiant;
use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    // Afficher toutes les inscriptions
    public function index()
    {
        $inscriptions = Inscription::with(['etudiant', 'classe'])->get();
        return view('inscriptions.index', compact('inscriptions'));
    }

    // Afficher le formulaire de création
    public function create()
    {
        $etudiants = Etudiant::all();
        $classes = Classe::all();
        return view('inscriptions.create', compact('etudiants', 'classes'));
    }

    // Enregistrer une nouvelle inscription
    public function store(Request $request)
    {
        $request->validate([
            'etudiant_id' => 'required',
            'classe_id' => 'required'
        ]);

        Inscription::create($request->all());
        return redirect()->route('inscriptions.index')->with('success', 'Inscription créée avec succès');
    }

    // Afficher une inscription spécifique
    public function show(Inscription $inscription)
    {
        return view('inscriptions.show', compact('inscription'));
    }

    // Afficher le formulaire d'édition
    public function edit(Inscription $inscription)
    {
        $etudiants = Etudiant::all();
        $classes = Classe::all();
        return view('inscriptions.edit', compact('inscription', 'etudiants', 'classes'));
    }

    // Mettre à jour une inscription
    public function update(Request $request, Inscription $inscription)
    {
        $request->validate([
            'etudiant_id' => 'required',
            'classe_id' => 'required'
        ]);

        $inscription->update($request->all());
        return redirect()->route('inscriptions.index')->with('success', 'Inscription mise à jour avec succès');
    }

    // Supprimer une inscription
    public function destroy(Inscription $inscription)
    {
        $inscription->delete();
        return redirect()->route('inscriptions.index')->with('success', 'Inscription supprimée avec succès');
    }
}
