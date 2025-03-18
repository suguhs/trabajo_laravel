@extends('layouts.app') <!-- Aquí extiendes tu layout principal -->

@section('content') <!-- Aquí defines el contenido que se insertará en la sección correspondiente -->
    <div class="row mt-5">
        <h1 class='text-center'>Lista de Actividades</h1>
    </div>
    <div class="row">
        @foreach ($imgs as $img)
            <img class='imgs' src="{{ asset($img->imagen) }}" alt="">
            <p>"{{ asset($img->imagen) }}"</p>
        @endforeach
    </div>
@endsection