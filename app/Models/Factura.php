<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;

    protected $fillable = [
        'total',
        'pago', 
        'cambio',
        'user_id',
    ];

    public function Impresiones(){
        return $this->hasMany(Impresione::class);
    }
    public function CajaFactura(){
        return $this->hasOne(CajaFactura::class);
    }
    public function User(){
        return $this->belongsTo(User::class);
    }

}
