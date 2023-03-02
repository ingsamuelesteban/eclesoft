<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Bautismos extends Model
{
    use HasFactory;

    protected $fillable = [
            'libro_bautismo',
            'folio_bautismo',
            'no_bautismo',
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
            'no_libro', 
            'folio',
            'no_declaracion', 
            'año', 
            'circunscripcion', 
            'oficialia', 
            'parroquia',
            'ub_parroquia', 
            'celebrante', 
            'fecha_celebracion', 
            'notas'
    ];
}
