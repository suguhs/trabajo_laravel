<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use App\Models\Agenda;
use Illuminate\Http\Request;

class VisualAgendaController extends Controller
{
    public function obtenerImagenesPorPersonaYFecha(Request $request)
    {
        $request->validate([
            'idpersona' => 'required|integer',
            'fecha' => 'required|date',
        ]);
    
        $registros = Agenda::where('idpersona', $request->idpersona)
                           ->where('fecha', $request->fecha)
                           ->select('idimagen', 'hora')
                           ->get();
    
        return view('agenda.resultado', compact('registros'));
    }
    
}
