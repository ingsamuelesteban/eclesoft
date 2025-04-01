<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Impresione extends Model
{
    use HasFactory;

    public function Bautismo(){
        return $this->belongsTo(Bautismos::class);
    }
    public function Decreto(){
        return $this->belongsTo(Decretos::class);
    }
    public function Decretosm(){
        return $this->belongsTo(Decretosm::class);
    }
    public function Matrimonio(){
        return $this->belongsTo(Matrimonios::class);
    }
}
