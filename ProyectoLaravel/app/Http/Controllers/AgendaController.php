<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Imagenes;
use App\Models\agenda;

class AgendaController extends Controller
{
    public function index()
    {
        return response()->json(agenda::with(['persona', 'imagen'])->get());
    }

    public function store(Request $request)
    {
        $request->validate([
            'fecha' => 'required|date',
            'hora' => 'required',
            'idpersona' => 'required|exists:personas,id',
            'idimagen' => 'required|exists:imagenes,id',
        ]);

        agenda::create($request->all());

        return response()->json(['message' => 'Entrada añadida con éxito']);
    }
}
