<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CajaFactura extends Model
{
    use HasFactory;

    protected $fillable = [
        'caja_id',
        'factura_id',
        'monto',
        'estado',
    ];
    public function Caja(){
        return $this->belongsTo(Caja::class);
    }

    public function Factura(){
        return $this->belongsTo(Factura::class);
    }
}
