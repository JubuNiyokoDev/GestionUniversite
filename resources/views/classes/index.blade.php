@extends('layouts.layout')
@section('content')
<h1>Liste des classes</h1>
<a href="{{ route('classes.create') }}">Créer une nouvelle classe</a>
<ul>
    @foreach ($classes as $classe)
    <li>{{ $classe->niveau }} - Département: {{ $classe->departement->nomd }}
        <a href="{{ route('classes.show', $classe->id) }}">Voir</a> |
        <a href="{{ route('classes.edit', $classe->id) }}">Modifier</a> |
        <form action="{{ route('classes.destroy', $classe->id) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit">Supprimer</button>
        </form>
    </li>
    @endforeach
</ul>
@endsection