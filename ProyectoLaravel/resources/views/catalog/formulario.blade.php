<!-- resources/views/formulario.blade.php -->
@extends('layouts.app')

@section('content')
<form action="{{ route('../../../../../app/Http/Controllers/VisualAgendaController.php" method="POST">
    @csrf
    <label for="idpersona">ID Persona:</label>
    <input type="number" name="idpersona" required>

    <label for="fecha">Fecha:</label>
    <input type="date" name="fecha" required>

    <button type="submit">Buscar</button>
</form>

@endsection
