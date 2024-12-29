@extends('layouts.layout')
@section('content')
<h1>Inscription</h1>
<p>Étudiant: {{ $inscription->etudiant->nom }} {{ $inscription->etudiant->prenom }}</p>
<p>Classe: {{ $inscription->classe->niveau }}</p>
<a href="{{ route('inscriptions.edit', $inscription->id) }}">Modifier</a>
<form action="{{ route('inscriptions.destroy', $inscription->id) }}" method="POST" style="display:inline">
    @csrf
    @method('DELETE')
    <button type="submit">Supprimer</button>
</form>
@endsection