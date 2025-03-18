<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ImagenesAgenda;

class Personas extends Model
{
    use HasFactory;

    // Relación con las imágenes (Una persona puede tener muchas imágenes)
    public function imagenes()
    {
        return $this->hasMany(ImagenesAgenda::class);
    }
}
