<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Decretos extends Model
{
    use HasFactory;

    protected $fillable = [
        'bautismo_id',
        'nombre', 
        'genero',
        'fecha_nacimiento', 
        'lugar_nacimiento',
        'nombre_madre',
        'cedula_madre', 
        'nombre_padre', 
        'cedula_padre', 
        'nombre_madrina', 
        'nombre_padrino',
        'nombre_civil', 
        'genero_civil',
        'fecha_nacimiento_civil', 
        'lugar_nacimiento_civil',
        'nombre_madre_civil',
        'cedula_madre_civil', 
        'nombre_padre_civil', 
        'cedula_padre_civil', 
        'nombre_madrina_civil', 
        'nombre_padrino_civil',
    ];
}
