<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FiltrarDecretosm extends Component
{

    public $nombreEsposa;
    public $nombreEsposo;
    public $cedulaEsposa;
    public $cedulaEsposo;
    public $fechaCreado;

    public function leerDatosFormulario(){
        $this->emit('criteriosBusqueda',
        $this->nombreEsposa,
        $this->nombreEsposo,
        $this->cedulaEsposa,
        $this->cedulaEsposo,
        $this->fechaCreado);
    }
    public function render()
    {
        return view('livewire.filtrar-decretosm');
    }
}
