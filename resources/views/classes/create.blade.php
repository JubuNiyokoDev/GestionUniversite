@extends('layouts.layout')
@section('content')
<h1>Créer une nouvelle classe</h1>

<form action="{{ route('classes.store') }}" method="POST">
    @csrf
    <label for="niveau">Niveau de la classe:</label>
    <input type="text" name="niveau" required>

    <label for="departement_id">Département:</label>
    <select name="departement_id">
        @foreach ($departements as $departement)
        <option value="{{ $departement->id }}">{{ $departement->nomd }}</option>
        @endforeach
    </select>
    <button type="submit">Enregistrer</button>
</form>
@endsection