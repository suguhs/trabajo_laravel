<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagenesAgenda extends Model
{
    use HasFactory;

    // Relación con la persona (Una imagen pertenece a una persona)
    public function persona()
    {
        return $this->belongsTo(Personas::class);
    }
}
