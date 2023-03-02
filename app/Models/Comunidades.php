<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comunidades extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_comunidad',
        'ubicacion',
        'coordinador',
        'telefonoc',
        'pfamiliar',
        'tfamiliar',
        'pjuvenil',
        'tjuvenil',
        'padolescentes',
        'tadolescentes',
        'pvocacional',
        'tvocacional',
        'psocial',
        'tsocial',
        'psalud',
        'tsalud',
        'pmisiones',
        'tmisiones',
        'pcatequesis',
        'tcatequesis',
        'pliturgica',
        'tliturgica',
        'ppenitenciaria',
        'tpenitenciaria',
        'pmovilidad',
        'tmovilidad',
        'peducativa',
        'teducativa',
        'puniversitaria',
        'tuniversitaria',
        'pcomunion',
        'tcomunion',
        'pecumenismo',
        'tecumenismo',
        'pambiente',
        'tambiente'

    ];
}
