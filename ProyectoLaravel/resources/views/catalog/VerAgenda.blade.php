@extends('layouts.app')

@section('content')
<div class="row mt-5">
    <h1 class='text-center'>Añadir Actividad</h1>
</div>

@if (isset($registros) && $registros->isNotEmpty())
<h2>Imágenes encontradas</h2>
<ul>
    @foreach ($registros as $registro)
    <li>ID Imagen: {{ $registro->idimagen }}, Hora: {{ $registro->hora }}</li>
    @endforeach
</ul>
@else
<p>No hay imágenes registradas para esta persona en esa fecha.</p>
@endif

@endsection