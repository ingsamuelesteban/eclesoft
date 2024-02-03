<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Decretosm extends Model
{
    use HasFactory;

    protected $fillable = [
    'matrimonio_id',
    'nombre_esposa',
    'nombre_esposa_civil',
    'cedula_esposa',
    'cedula_esposa_civil',
    'nombre_esposo',
    'nombre_esposo_civil',
    'cedula_esposo',
    'cedula_esposo_civil',
    'fecha_nacimiento_esposa',
    'fecha_nacimiento_esposa_civil',
    'fecha_nacimiento_esposo',
    'fecha_nacimiento_esposo_civil',
    'lugar_nacimiento_esposa',
    'lugar_nacimiento_esposa_civil',
    'lugar_nacimiento_esposo',
    'lugar_nacimiento_esposo_civil',
    'nombre_madre_esposa',
    'nombre_madre_esposa_civil',
    'nombre_madre_esposo',
    'nombre_madre_esposo_civil',
    'nombre_padre_esposa',
    'nombre_padre_esposa_civil',
    'nombre_padre_esposo',
    'nombre_padre_esposo_civil',
    'nombre_madrina',
    'nombre_madrina_civil',
    'cedula_madrina',
    'cedula_madrina_civil',
    'nombre_padrino',
    'nombre_padrino_civil',
    'cedula_padrino',
    'cedula_padrino_civil',
    ];
}
