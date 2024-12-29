@extends('layouts.layout')
@section('content')
<h1>Créer une nouvelle faculté</h1>

<form action="{{ route('faculites.store') }}" method="POST">
    @csrf
    <label for="nomf">Nom:</label>
    <input type="text" name="nomf" id="nomf" required>

    <label for="codef">Code:</label>
    <input type="text" name="codef" id="codef" required>

    <button type="submit">Créer</button>
</form>
@endsection