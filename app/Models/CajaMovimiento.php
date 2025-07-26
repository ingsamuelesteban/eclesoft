<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CajaMovimiento extends Model
{
    use HasFactory;

    protected $fillable = [
        'caja_id',
        'tipo',
        'monto',
        'motivo',
        'estado',
        'persona',
    ];
    public function Caja(){
        return $this->belongsTo(Caja::class);
    }
}
