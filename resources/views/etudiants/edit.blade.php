@extends('layouts.layout')
@section('content')
<h1>Modifier l'étudiant</h1>

<form action="{{ route('etudiants.update', $etudiant->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="nom">Nom:</label>
    <input type="text" name="nom" value="{{ $etudiant->nom }}" required>
    <label for="prenom">Prénom:</label>
    <input type="text" name="prenom" value="{{ $etudiant->prenom }}" required>
    <label for="genre">Genre:</label>
    <select name="genre" required>
        <option value="Homme" @if($etudiant->genre == 'Homme') selected @endif>Homme</option>
        <option value="Femme" @if($etudiant->genre == 'Femme') selected @endif>Femme</option>
    </select>
    <label for="datedenaissance">Date de naissance:</label>
    <input type="date" name="datedenaissance" value="{{ $etudiant->datedenaissance }}" required>

    <label for="classe_id">Classe:</label>
    <select name="classe_id">
        @foreach ($classes as $classe)
        <option value="{{ $classe->id }}" @if($etudiant->classe_id == $classe->id) selected @endif>
            {{ $classe->niveau }}
        </option>
        @endforeach
    </select>
    <button type="submit">Mettre à jour</button>
</form>
@endsection