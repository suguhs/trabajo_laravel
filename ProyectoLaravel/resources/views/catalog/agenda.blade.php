@extends('layouts.app')

@section('content')
    <div class="row mt-5">
        <h1 class='text-center'>Añadir Actividad</h1>
    </div>

    <form action="{{ route('agenda.store') }}" method="POST" enctype="multipart/form-data">
        @csrf <!-- Token CSRF para proteger el formulario -->
        
        <div class="form-group">
            <label for="fecha">Fecha:</label>
            <input type="date" name="fecha" id="fecha" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="hora">Hora:</label>
            <input type="time" name="hora" id="hora" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="persona_id">Persona:</label>
            <select name="persona_id" id="persona_id" class="form-control" required>
                @foreach ($personas as $persona)
                    <option value="{{ $persona->id }}">{{ $persona->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="imagen_id">Imagen:</label>
            <select name="imagen_id" id="imagen_id" class="form-control" required>
                @foreach ($imagenes as $imagen)
                    <option value="{{ $imagen->id }}">{{ $imagen->descripcion }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="imagen">Imagen (si aplica):</label>
            <input type="file" name="imagen" id="imagen" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Añadir Actividad</button>
    </form>
@endsection
