<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;
use App\Models\Persona;
use App\Models\Imagen;

class AgendaController extends Controller
{
    public function create()
    {
        $personas = Persona::all();
        $imagenes = Imagen::all();
        return view('agenda.create', compact('personas', 'imagenes'));
    }

    public function store(Request $request)
    {
        $agenda = new Agenda();
        $agenda->fecha = $request->fecha;
        $agenda->hora = $request->hora;
        $agenda->idpersona = $request->persona;
        $agenda->idimagen = $request->imagen;
        $agenda->save();
        return redirect('/agenda');
    }

    public function show(Request $request)
    {
        $personas = Persona::all();
        $agenda = [];

        if ($request->has('persona') && $request->has('fecha')) {
            $agenda = Agenda::select('imagenes.imagen', 'agenda.fecha', 'agenda.hora')
                ->join('imagenes', 'imagenes.idimagen', '=', 'agenda.idimagen')
                ->where('agenda.idpersona', $request->persona)
                ->where('agenda.fecha', $request->fecha)
                ->get();
        }

        return view('agenda.index', compact('personas', 'agenda'));
    }
}