<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FiltrarDecretos extends Component
{

    public $nombre;
    public $fechaNacimiento;
    public $fechaSolicitud;

    public function leerDatosFormulario(){
        $this->emit('criteriosBusqueda',
        $this->nombre,
        $this->fechaNacimiento,
        $this->fechaSolicitud);
    }

    
    public function render()
    {
        return view('livewire.filtrar-decretos');
    }
}
