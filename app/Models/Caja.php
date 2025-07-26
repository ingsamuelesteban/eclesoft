<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caja extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'estado',
        'fondo',
    ];

    public function User(){
        return $this->belongsTo(User::class);
    }

    public function Cuadre(){
        return $this->hasMany(Cuadre::class);
    }
    public function CajaMovimiento(){
        return $this->hasMany(CajaMovimiento::class);
    }
}
