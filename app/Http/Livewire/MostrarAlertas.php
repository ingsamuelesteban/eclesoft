<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MostrarAlertas extends Component
{
    public $message;
    
    public function render()
    {
        return view('livewire.mostrar-alertas');
    }
}
