<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Personas;
use App\Models\Imagenes;

class agenda extends Model
{
    use HasFactory;
    
    protected $fillable = ['id ','fecha', 'hora', 'idpersona', 'idimagen'];

    public function persona()
    {
        return $this->belongsTo(Personas::class);
    }

    public function imagen()
    {
        return $this->belongsTo(Imagenes::class);
    }
}

