@extends('layouts.layout')
@section('content')
<h1>Créer un nouvel étudiant</h1>

<form action="{{ route('etudiants.store') }}" method="POST">
    @csrf
    <label for="nom">Nom:</label>
    <input type="text" name="nom" required>
    <label for="prenom">Prénom:</label>
    <input type="text" name="prenom" required>
    <label for="genre">Genre:</label>
    <select name="genre" required>
        <option value="Homme">Homme</option>
        <option value="Femme">Femme</option>
    </select>
    <label for="datedenaissance">Date de naissance:</label>
    <input type="date" name="datedenaissance" required>

    <label for="classe_id">Classe:</label>
    <select name="classe_id">
        @foreach ($classes as $classe)
        <option value="{{ $classe->id }}">{{ $classe->niveau }}</option>
        @endforeach
    </select>
    <button type="submit">Enregistrer</button>
</form>
@endsection