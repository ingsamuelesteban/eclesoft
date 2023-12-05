<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FiltrarNoBautizado extends Component
{
    public $nombre;
    public $nombre_madre;
    public $cedula_madre;
    public $nombre_padre;
    public $cedula_padre;

    public function leerDatosFormulario()
    {
        $this->emit( 'criteriosBusqueda', $this->nombre, $this->nombre_madre, $this->cedula_madre, $this->nombre_padre, $this->cedula_padre);
    }
    public function render()
    {
        return view('livewire.filtrar-no-bautizado');
    }
}
