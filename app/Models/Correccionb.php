<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Correccionb extends Model
{
    use HasFactory;

    protected $fillable = [
        'libro_decreto',
        'folio_decreto',
        'no_decreto',
        'parroquia_id',
        'fecha_solicitud',
        'bautizado',
        'libro_bautismo',
        'folio_bautismo',
        'acta_bautismo',
        'documento',
        'titular_documento',
        'referencias_documento',
        'notas',


    ];

    public function parroquia(){
        return $this->belongsTo(Parroquiaz::class);
    }

    public function documentos(){
        return $this->belongsTo(Documentcb::class);
    }
}
