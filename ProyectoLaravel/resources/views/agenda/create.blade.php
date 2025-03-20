@extends('layouts.app')
@section('content')
    <form action="./store" method="POST">
        @csrf
        <label>Fecha:</label>
        <input type="date" name="fecha" required>
        <label>Hora:</label>
        <input type="time" name="hora" required>
        <label>Persona:</label>
        <select name="persona">
            @foreach($personas as $persona)
                <option value="{{ $persona->idpersona }}">{{ $persona->nombre }} {{ $persona->apellidos }}</option>
            @endforeach
        </select>
        <label>Imagen:</label>
        @foreach($imagenes as $imagen)
            <input type="radio" name="imagen" value="{{ $imagen->idimagen }}">
            <img src="{{ asset($imagen->imagen) }}" width="50">
        @endforeach
        <button type="submit">Guardar</button>
    </form>
@endsection
