<?php

namespace App\Http\Livewire;

use App\Models\Bautismos;
use Livewire\Component;
use Carbon\Carbon;
class FiltrarEstadisticas extends Component
{
    public $anoBusqueda;

    public function leerDatosFormulario(){
        $this->emit('criteriosBusqueda',
        $this->anoBusqueda
    );
    }
    public function render()

    {
        $fechaReciente = Carbon::parse(Bautismos::max('fecha_celebracion'))->isoFormat('Y');
        $fechaAntigua = Carbon::parse(Bautismos::whereDate('fecha_celebracion','<>','1111-11-11')->min('fecha_celebracion'))->isoFormat('Y');
      
        return view('livewire.filtrar-estadisticas',['fechaReciente'=>$fechaReciente, 'fechaAntigua'=>$fechaAntigua]);
    }
}
