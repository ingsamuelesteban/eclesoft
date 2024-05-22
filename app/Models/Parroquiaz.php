<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parroquiaz extends Model
{
    protected $fillable = [
        'parroquia',
        'telefonop',
        'rnc',
        'parroco',
        'vicario',
        'calle',
        'ciudad',
        'provincia',
        'correo',
    ];

    public function Confirmacion(){
        return $this->belongsTo(Confirmacion::class);
    }
}
