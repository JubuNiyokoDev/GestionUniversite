@extends('layouts.layout')
@section('content')
<h1>Faculté: {{ $faculite->nomf }}</h1>
<p>Code: {{ $faculite->codef }}</p>
<a href="{{ route('faculites.edit', $faculite->id) }}">Modifier</a>
<form action="{{ route('faculites.destroy', $faculite->id) }}" method="POST" style="display:inline">
    @csrf
    @method('DELETE')
    <button type="submit">Supprimer</button>
</form>
@endsection