<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ImagenesAgenda extends Model
{
    use HasFactory;

    // Relación con la persona (Una imagen pertenece a una persona)
    public function persona()
    {
        
        $idpersona;
        $fecha;
        $registros = DB::table('agenda')
                       ->where('idpersona', $idpersona)
                       ->where('fecha', $fecha)
                       ->select('idimagen', 'hora')
                       ->get();
        
    }
}
