@extends('layouts.app')
@section('content')
    <form action="./agenda" method="GET">
        <label>Persona:</label>
        <select name="persona">
            @foreach($personas as $persona)
                <option value="{{ $persona->idpersona }}">{{ $persona->nombre }} {{ $persona->apellidos }}</option>
            @endforeach
        </select>
        <label>Fecha:</label>
        <input type="date" name="fecha">
        <button type="submit">Consultar</button>
    </form>
    @if($agenda)
        <table>
            <tr>
                <th>Imagen</th>
                <th>Fecha</th>
                <th>Hora</th>
            </tr>
            @foreach($agenda as $evento)
                <tr>
                    
                    <td><img src="{{ url($evento->imagen) }}" width="50"></td>
                    <td>{{ $evento->fecha }}</td>
                    <td>{{ $evento->hora }}</td>
                </tr>
            @endforeach
        </table>
    @endif
@endsection