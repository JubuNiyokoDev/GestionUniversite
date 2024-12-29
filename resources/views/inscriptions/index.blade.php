@extends('layouts.layout')
@section('content')
<h1>Liste des inscriptions</h1>
<a href="{{ route('inscriptions.create') }}">Créer une nouvelle inscription</a>
<ul>
    @foreach ($inscriptions as $inscription)
    <li>Étudiant: {{ $inscription->etudiant->nom }} {{ $inscription->etudiant->prenom }} - Classe: {{ $inscription->classe->niveau }}
        <a href="{{ route('inscriptions.show', $inscription->id) }}">Voir</a> |
        <a href="{{ route('inscriptions.edit', $inscription->id) }}">Modifier</a> |
        <form action="{{ route('inscriptions.destroy', $inscription->id) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit">Supprimer</button>
        </form>
    </li>
    @endforeach
</ul>
@endsection