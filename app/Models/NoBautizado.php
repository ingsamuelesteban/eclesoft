<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoBautizado extends Model
{
    use HasFactory;

    protected $fillable = [

        'nombre',
        'genero',
        'fecha_nacimiento',
        'nombre_padre',
        'cedula_padre',
        'nombre_madre',
        'cedula_madre',
        'hospital',
        'escuela',
        'docmadre',
        'docpadre',
        'notas',
    ];
}
