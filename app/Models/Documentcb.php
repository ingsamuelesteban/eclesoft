<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documentcb extends Model
{
    use HasFactory;

    protected $fillable = [

        'correccionb_id',
        'documento',
        'titular_documento',
        'referencias_documento',
    ];

    public function correccionb(){
        return $this->hasOne(Correccionb::class);
    }
}
