<?php

namespace App\Http\Livewire;

use App\Models\Comunidades;
use Livewire\Component;

class MostrarComunidades extends Component
{
    public function render()
    {
        return view('livewire.mostrar-comunidades',[
            'comunidades'=>Comunidades::paginate(10)
        ]);
    }
}
