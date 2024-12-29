@extends('layouts.layout')
@section('content')
<h1>Classe: {{ $classe->niveau }}</h1>
<p>Département: {{ $classe->departement->nomd }}</p>
<a href="{{ route('classes.edit', $classe->id) }}">Modifier</a>
<form action="{{ route('classes.destroy', $classe->id) }}" method="POST" style="display:inline">
    @csrf
    @method('DELETE')
    <button type="submit">Supprimer</button>
</form>
@endsection