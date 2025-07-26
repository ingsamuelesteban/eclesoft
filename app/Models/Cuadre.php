<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuadre extends Model
{
    use HasFactory;

    protected $fillable = [
        'caja_id',
        'user_id',
        'total_efectivo',
        'total_desglose',
        'diferencia',
        'dosmil',
        'mil',
        'quinientos',
        'doscientos',
        'cien',
        'cincuenta',
        'veinticinco',
        'diez',
        'cinco',
        'uno',
        // ...otros campos si tienes
    ];

    public function User(){
        return $this->belongsTo(User::class);
    }
    public function Caja(){
        return $this->belongsTo(Caja::class);
    }

    public function CajaFactura(){
        return $this->belongsTo(CajaFactura::class);
    }
}
