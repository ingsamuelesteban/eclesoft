<?php

namespace App\Http\Livewire;

use App\Models\Parroquiaz;
use Livewire\Component;

class FiltrarConfirmacion extends Component
{

    public $nombre;
    public $nombreMadre;
    public $nombrePadre;
    public $padrinos;
    public $parroquia;

    public function leerDatosFormulario(){
       $this->emit('criteriosBusqueda', $this->nombre, $this->nombreMadre, $this->nombrePadre, $this->padrinos, $this->parroquia); 
    }
    
    public function render()
    {
        $parroquias = Parroquiaz::orderBy('parroquia', 'asc')->get();
        return view('livewire.filtrar-confirmacion', ['parroquias'=>$parroquias]);
    }
}
