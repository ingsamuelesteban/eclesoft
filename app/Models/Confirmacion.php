<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Confirmacion extends Model
{
    use HasFactory;

    protected $fillable = [

        'libro_confirmacion',
        'folio_confirmacion',
        'no_confirmacion',  
        'celebrante',
        'parroquia_id', 
        'fecha_celebracion', 
        'nombre', 
        'apellidos',
        'edad', 
        'nombre_madre',
        'nombre_padre',  
        'padrinos',
        'notas'
];

public function Parroquiaz(){
    return $this->hasOne(Parroquiaz::class);
}
}
