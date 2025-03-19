<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;

    protected $table = 'agenda'; // Nombre de la tabla en la BD
    protected $primaryKey = 'id'; // Clave primaria
    public $timestamps = false; // Si tu tabla no usa created_at y updated_at

    protected $fillable = ['fecha', 'hora', 'idpersona', 'idimagen'];
}
