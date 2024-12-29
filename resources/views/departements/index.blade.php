@extends('layouts.layout')
@section('content')
<h1>Liste des départements</h1>
<a href="{{ route('departements.create') }}">Créer un nouveau département</a>
<ul>
    @foreach ($departements as $departement)
    <li>{{ $departement->nomd }} - Faculté: {{ $departement->faculite->nomf }}
        <a href="{{ route('departements.show', $departement->id) }}">Voir</a> |
        <a href="{{ route('departements.edit', $departement->id) }}">Modifier</a> |
        <form action="{{ route('departements.destroy', $departement->id) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit">Supprimer</button>
        </form>
    </li>
    @endforeach
</ul>
@endsection