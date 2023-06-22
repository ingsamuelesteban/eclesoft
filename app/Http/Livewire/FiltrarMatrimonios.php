<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FiltrarMatrimonios extends Component
{
    public $nombre_esposo;
    public $nombre_esposa;
    public $documento_esposo;
    public $documento_esposa;
    public $fecha_celebracion;

    public function leerDatosFormulario()
    {
        $this->emit('criteriosBusqueda', $this->nombre_esposo, $this->nombre_esposa, $this->documento_esposo, $this->documento_esposa, $this->fecha_celebracion );
    }

    public function render()
    {
        return view('livewire.filtrar-matrimonios');
    }
}
