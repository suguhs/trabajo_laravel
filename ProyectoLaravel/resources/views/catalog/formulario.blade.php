<!-- resources/views/formulario.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="row mt-5">
        <h1 class="text-center">Buscar Actividades por Fecha y Persona</h1>
    </div>

    <form action="{{ route('buscar-imagenes') }}" method="GET">
        @csrf
        
        <!-- Campo de fecha -->
        <div class="form-group">
            <label for="fecha">Fecha:</label>
            <input type="date" name="fecha" id="fecha" class="form-control" required>
        </div>

        <!-- Campo de número de persona -->
        <div class="form-group">
            <label for="persona_id">Número de Persona:</label>
            <input type="number" name="persona_id" id="persona_id" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Buscar</button>
    </form>
@endsection
