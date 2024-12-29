@extends('layouts.layout')
@section('content')
<h1>Étudiant: {{ $etudiant->nom }} {{ $etudiant->prenom }}</h1>
<p>Genre: {{ $etudiant->genre }}</p>
<p>Date de naissance: {{ $etudiant->datedenaissance }}</p>
<p>Classe: {{ $etudiant->classe->niveau }}</p>
<a href="{{ route('etudiants.edit', $etudiant->id) }}">Modifier</a>
<form action="{{ route('etudiants.destroy', $etudiant->id) }}" method="POST" style="display:inline">
    @csrf
    @method('DELETE')
    <button type="submit">Supprimer</button>
</form>
@endsection