<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Impresione extends Model
{
    use HasFactory;

    protected $fillable = [
        'bautismo_id',
        'decreto_id',
        'decretom_id',
        'matrimonio_id',
        'pagada',
    ];

    public function Bautismo(){
        return $this->belongsTo(Bautismos::class);
    }
    public function Decreto(){
        return $this->belongsTo(Decretos::class);
    }
    public function Decretosm(){
        return $this->belongsTo(Decretosm::class, 'decretom_id');
    }
    public function Matrimonio(){
        return $this->belongsTo(Matrimonios::class);
    }

    public function NoBautizado()
    {
        return $this->belongsTo(NoBautizado::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function Factura(){
        return $this->belongsTo(Factura::class);
    }

}
