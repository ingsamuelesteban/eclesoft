<?php

namespace App\Http\Livewire;

use App\Models\Parroquiaz;
use Livewire\Component;

class FiltrarCorreccionb extends Component
{


    public $nombre_bautizado;
    public $fecha_solicitud;
    public $parroquia;

    public function leerDatosFormulario(){
        $this->emit('criteriosBusqueda', $this->nombre_bautizado, $this->fecha_solicitud, $this->parroquia);
    }
    public function render()
    {
        $parroquias = Parroquiaz::orderBy('parroquia', 'asc')->get();
        return view('livewire.filtrar-correccionb', ['parroquias'=>$parroquias]);
    }
}
