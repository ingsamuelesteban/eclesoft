<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FiltrarBautismos extends Component
{
    public $nombre;
    public $cedulaMadre;
    public $cedulaPadre;
    public $fechaNacimiento;

    public function leerDatosFormulario()
    {
        $this->emit('criteriosBusqueda', $this->nombre, $this->cedulaMadre, $this->cedulaPadre, $this->fechaNacimiento);
    }

    public function render()
    {
        return view('livewire.filtrar-bautismos');
    }
}
