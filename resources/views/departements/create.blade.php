@extends('layouts.layout')
@section('content')
<h1>Créer un nouveau département</h1>

<form action="{{ route('departements.store') }}" method="POST">
    @csrf
    <label for="nomd">Nom du département:</label>
    <input type="text" name="nomd" required>
    <label for="coded">Code:</label>
    <input type="text" name="coded" required>

    <label for="faculite_id">Faculté:</label>
    <select name="faculite_id">
        @foreach ($faculites as $faculite)
        <option value="{{ $faculite->id }}">{{ $faculite->nomf }}</option>
        @endforeach
    </select>
    <button type="submit">Enregistrer</button>
</form>
@endsection