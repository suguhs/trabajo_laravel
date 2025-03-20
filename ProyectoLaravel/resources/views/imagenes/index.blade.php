@extends('layouts.app')
@section('content')
    <table border="1">

        @foreach($imagenes->chunk(4) as $grupo)
            <tr>
                @foreach($grupo as $imagen)
                    <td>
                        <img src="{{ asset($imagen->imagen) }}" width="50"><br>
                        {{ $imagen->imagen }}<br>
                       
                        {{ $imagen->categoria }}
                    </td>
                @endforeach
            </tr>
        @endforeach
    </table>
@endsection

