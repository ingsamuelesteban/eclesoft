<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parroquia extends Model
{
    use HasFactory;

    protected $fillable = [
        'diocesis',
        'obispo',
        'parroquia',
        'telefonop',
        'rnc',
        'parroco',
        'vicario',
        'calle',
        'ciudad',
        'provincia',
        'correo',
        'logo',
        'circunscripcion',
        'color_borde',
        'logo_obispado',
        'firmante_id',
        'facturacion_activa',
        'precio_acta',
    ];
}
