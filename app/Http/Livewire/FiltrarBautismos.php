<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FiltrarBautismos extends Component
{
    public $nombre;
    public $nombreMadre;
    public $nombrePadre;
    public $fechaNacimiento;

    public function leerDatosFormulario()
    {
        $this->emit('criteriosBusqueda', $this->nombre, $this->nombreMadre, $this->nombrePadre, $this->fechaNacimiento);
    }

    public function render()
    {
        return view('livewire.filtrar-bautismos');
    }
}
