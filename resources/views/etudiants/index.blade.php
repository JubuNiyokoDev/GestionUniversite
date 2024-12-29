@extends('layouts.layout')
@section('content')
<h1>Liste des étudiants</h1>
<a href="{{ route('etudiants.create') }}">Créer un nouvel étudiant</a>
<ul>
    @foreach ($etudiants as $etudiant)
    <li>{{ $etudiant->nom }} {{ $etudiant->prenom }} - Classe: {{ $etudiant->classe->niveau }}
        <a href="{{ route('etudiants.show', $etudiant->id) }}">Voir</a> |
        <a href="{{ route('etudiants.edit', $etudiant->id) }}">Modifier</a> |
        <form action="{{ route('etudiants.destroy', $etudiant->id) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit">Supprimer</button>
        </form>
    </li>
    @endforeach
</ul>
@endsection