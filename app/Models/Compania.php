<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compania extends Model
{
    protected $fillable = ['nombre', 'email', 'logo', 'website'];
    use HasFactory;
    public function empleados()
    {
        return $this->hasMany(Empleado::class, 'id_compania');
    }
}
