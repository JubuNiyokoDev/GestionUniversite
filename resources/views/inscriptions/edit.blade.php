@extends('layouts.layout')
@section('content')
<h1>Modifier l'inscription</h1>

<form action="{{ route('inscriptions.update', $inscription->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="etudiant_id">Étudiant:</label>
    <select name="etudiant_id">
        @foreach ($etudiants as $etudiant)
        <option value="{{ $etudiant->id }}" @if($inscription->etudiant_id == $etudiant->id) selected @endif>
            {{ $etudiant->nom }} {{ $etudiant->prenom }}
        </option>
        @endforeach
    </select>

    <label for="classe_id">Classe:</label>
    <select name="classe_id">
        @foreach ($classes as $classe)
        <option value="{{ $classe->id }}" @if($inscription->classe_id == $classe->id) selected @endif>
            {{ $classe->niveau }}
        </option>
        @endforeach
    </select>

    <button type="submit">Mettre à jour</button>
</form>
@endsection