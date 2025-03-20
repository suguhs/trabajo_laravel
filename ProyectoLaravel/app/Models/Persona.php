<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ImagenesAgenda;

class Persona extends Model
{
    use HasFactory;
    protected $table = 'personas';
    protected $primaryKey = 'idpersona';
    protected $fillable = ['nombre', 'apellidos', 'edad'];
}
