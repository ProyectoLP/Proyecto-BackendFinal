<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $fillable = ['Subject', 'StartTime','EndTime','user_id','abogado_id'];
    use HasFactory;
}
