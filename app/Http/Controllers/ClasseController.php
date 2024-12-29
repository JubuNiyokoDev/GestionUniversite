<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Departement;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    // Afficher toutes les classes
    public function index()
    {
        $classes = Classe::with('departement')->get();
        return view('classes.index', compact('classes'));
    }

    // Afficher le formulaire de création
    public function create()
    {
        $departements = Departement::all();
        return view('classes.create', compact('departements'));
    }

    // Enregistrer une nouvelle classe
    public function store(Request $request)
    {
        $request->validate([
            'niveau' => 'required',
            'departement_id' => 'required'
        ]);

        Classe::create($request->all());
        return redirect()->route('classes.index')->with('success', 'Classe créée avec succès');
    }

    // Afficher une classe spécifique
    public function show(Classe $classe)
    {
        return view('classes.show', compact('classe'));
    }

    // Afficher le formulaire d'édition
    public function edit(Classe $classe)
    {
        $departements = Departement::all();
        return view('classes.edit', compact('classe', 'departements'));
    }

    // Mettre à jour une classe
    public function update(Request $request, Classe $classe)
    {
        $request->validate([
            'niveau' => 'required',
            'departement_id' => 'required'
        ]);

        $classe->update($request->all());
        return redirect()->route('classes.index')->with('success', 'Classe mise à jour avec succès');
    }

    // Supprimer une classe
    public function destroy(Classe $classe)
    {
        $classe->delete();
        return redirect()->route('classes.index')->with('success', 'Classe supprimée avec succès');
    }
}
