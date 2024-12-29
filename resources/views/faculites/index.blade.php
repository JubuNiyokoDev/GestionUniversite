@extends('layouts.layout')

@section('title', 'Liste des Facultés')

@section('content')
<h1>Liste des Facultés</h1>
<a href="{{ route('faculites.create') }}" class="btn btn-primary mb-3">Créer une nouvelle faculté</a>
<table id="faculites-table" class="display">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Code</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($faculites as $faculite)
        <tr>
            <td>{{ $faculite->nomf }}</td>
            <td>{{ $faculite->codef }}</td>
            <td>
                <a href="{{ route('faculites.show', $faculite->id) }}" class="btn btn-info btn-sm">Voir</a>
                <a href="{{ route('faculites.edit', $faculite->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                <form action="{{ route('faculites.destroy', $faculite->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('#faculites-table').DataTable();
    });
</script>
@endsection