<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoAbogado extends Model
{
   protected $table = "tipoabogados";
   protected $fillable = ['nombreTipo'];
    use HasFactory;
}


