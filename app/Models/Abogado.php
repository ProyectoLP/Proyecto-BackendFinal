<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abogado extends Model
{
    protected $table = "abogados";
    protected $fillable = ['nombre', 'calificacion','contacto','direccion','tipoabogado_id'];
    use HasFactory;
}
