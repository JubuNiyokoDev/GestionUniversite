@extends('layouts.layout')
@section('content')
<h1>Créer une nouvelle inscription</h1>

<form action="{{ route('inscriptions.store') }}" method="POST">
    @csrf
    <label for="etudiant_id">Étudiant:</label>
    <select name="etudiant_id">
        @foreach ($etudiants as $etudiant)
        <option value="{{ $etudiant->id }}">{{ $etudiant->nom }} {{ $etudiant->prenom }}</option>
        @endforeach
    </select>

    <label for="classe_id">Classe:</label>
    <select name="classe_id">
        @foreach ($classes as $classe)
        <option value="{{ $classe->id }}">{{ $classe->niveau }}</option>
        @endforeach
    </select>

    <button type="submit">Enregistrer</button>
</form>
@endsection