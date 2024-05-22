<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diocesi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'obispo',
        'titulo',
        'canciller',
        'vicario_general',
        'firma',
        'calle',
        'ciudad',
        'provincia',
        'telefono',
        'rnc',
        'correo',
        'logo',
    ];
}
