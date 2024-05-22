<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matrimonios extends Model
{
    use HasFactory;

    protected $fillable = [
        'libro_matrimonio',
        'folio_matrimonio',
        'no_matrimonio',
        'fecha_celebracion',
        'celebrante_name', 
        'nombre_esposo',
        'documento_esposo',
        'nombre_esposa',
        'documento_esposa',
        'nombre_padrino',
        'documento_padrino',
        'nombre_madrina',
        'documento_madrina',
        'fecha_transcripcion',
        'no_libro',
        'folio',
        'no_transcripcion',
        'notas'

];
}
