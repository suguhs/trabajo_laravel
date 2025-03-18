<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use App\Models\ImagenesAgenda;
use Illuminate\Http\Request;

class VisualAgendaController extends Controller
{
    // Método para mostrar el formulario de búsqueda
    public function showForm()
    {
        return view('catalog.formulario');
    }

    // Método para manejar la búsqueda y mostrar las imágenes
    public function buscarImagenes(Request $request)
    {
        // Validación de los datos de entrada
        $request->validate([
            'fecha' => 'required|date',
            'persona_id' => 'required|exists:personas,id',  // Asegurarse de que el ID de la persona sea válido
        ]);

        // Buscar la persona con el ID proporcionado
        $persona = Personas::find($request->persona_id);

        // Si la persona no existe, mostrar un mensaje de error
        if (!$persona) {
            return redirect()->back()->with('error', 'Persona no encontrada');
        }

        // Buscar las imágenes asociadas a la persona usando el modelo ImagenesAgenda
        $imagenes = ImagenesAgenda::where('persona_id', $persona->id)->get();

        // Retornar la vista con las imágenes de la persona
        return view('agenda.imagenes', compact('imagenes', 'persona'));
    }
}
