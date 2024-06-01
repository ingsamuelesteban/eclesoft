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
        'sexo', 
        'nombre_madre',
        'nombre_padre',  
        'sexo_padrinos',
        'padrinos',
        'notas'
];

public function parroquia(){
    return $this->belongsTo(Parroquiaz::class);
}
}
