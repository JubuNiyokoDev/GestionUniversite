@extends('layouts.layout')
@section('content')
<h1>Modifier le département</h1>

<form action="{{ route('departements.update', $departement->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="nomd">Nom du département:</label>
    <input type="text" name="nomd" value="{{ $departement->nomd }}" required>
    <label for="coded">Code:</label>
    <input type="text" name="coded" value="{{ $departement->coded }}" required>

    <label for="faculite_id">Faculté:</label>
    <select name="faculite_id">
        @foreach ($faculites as $faculite)
        <option value="{{ $faculite->id }}" @if($departement->faculite_id == $faculite->id) selected @endif>
            {{ $faculite->nomf }}
        </option>
        @endforeach
    </select>
    <button type="submit">Mettre à jour</button>
</form>
@endsection