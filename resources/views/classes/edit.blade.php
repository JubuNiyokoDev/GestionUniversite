@extends('layouts.layout')
@section('content')
<h1>Modifier la classe</h1>

<form action="{{ route('classes.update', $classe->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="niveau">Niveau de la classe:</label>
    <input type="text" name="niveau" value="{{ $classe->niveau }}" required>

    <label for="departement_id">Département:</label>
    <select name="departement_id">
        @foreach ($departements as $departement)
        <option value="{{ $departement->id }}" @if($classe->departement_id == $departement->id) selected @endif>
            {{ $departement->nomd }}
        </option>
        @endforeach
    </select>
    <button type="submit">Mettre à jour</button>
</form>
@endsection