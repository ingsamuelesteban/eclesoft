<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FiltrarUsuarios extends Component
{

    public $nombre;
    public $email;

    public function leerDatosFormulario(){
        $this->emit('criteriosBusqueda', $this->nombre, $this->email);
    }
    public function render()
    {
        return view('livewire.filtrar-usuarios');
    }
}
