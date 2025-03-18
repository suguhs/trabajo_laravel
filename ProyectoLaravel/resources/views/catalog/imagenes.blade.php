<!-- resources/views/agenda/imagenes.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="row mt-5">
        <h1 class="text-center">Imágenes de la Persona</h1>
    </div>

    <!-- Mostrar imágenes -->
    <div class="row">
        @foreach ($imagenes as $imagen)
            <div class="col-md-4">
                <img class="imgs" src="{{ asset('storage/' . $imagen->path) }}" alt="Imagen de la persona" style="width: 100%; height: auto;">
            </div>
        @endforeach
    </div>

    @if($imagenes->isEmpty())
        <p class="text-center">No hay imágenes disponibles para esta persona.</p>
    @endif
@endsection
