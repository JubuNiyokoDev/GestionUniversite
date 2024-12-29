@extends('layouts.layout')
@section('content')
<h1>Modifier la faculté</h1>

<form action="{{ route('faculites.update', $faculite->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="nomf">Nom:</label>
    <input type="text" name="nomf" id="nomf" value="{{ $faculite->nomf }}" required>

    <label for="codef">Code:</label>
    <input type="text" name="codef" id="codef" value="{{ $faculite->codef }}" required>

    <button type="submit">Mettre à jour</button>
</form>
@endsection