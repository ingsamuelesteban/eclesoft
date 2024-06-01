<?php

namespace App\Http\Livewire;

use App\Models\Confirmacion;
use Livewire\Component;
use Livewire\WithPagination;

class MostrarConfirmacion extends Component
{

    use WithPagination;

    public $nombre;
    public $nombreMadre;
    public $nombrePadre;
    public $padrinos;
    public $parroquia;

    public function buscar($nombre, $nombreMadre, $nombrePadre, $padrinos, $parroquia){
        $this->nombre = $nombre;
        $this->nombreMadre = $nombreMadre;
        $this->nombrePadre = $nombrePadre;
        $this->padrinos = $padrinos;
        $this->parroquia = $parroquia;
    }

    protected $listeners = ['eliminarConfirmacion', 'criteriosBusqueda' =>  'buscar'];

    public function eliminarConfirmacion(Confirmacion $confirmacion){
        $confirmacion->delete();
    }


    public function render()
    {
        $confirmaciones = Confirmacion::when($this->nombre, function($query){
            $query->where('nombre', 'LIKE', '%' . $this->nombre . '%');
        })
        ->when($this->nombreMadre, function($query){
            $query->where('nombre_madre', 'LIKE', '%' . $this->nombreMadre . '%');
        })
        ->when($this->nombrePadre, function($query){
            $query->where('nombre_padre', 'LIKE', '%' . $this->nombrePadre . '%');
        })
        ->when($this->padrinos, function($query){
            $query->where('padrinos', 'LIKE', '%' . $this->padrinos . '%');
        })
        ->when($this->parroquia, function($query){
            $query->where('parroquia_id', $this->parroquia);
        })->orderBy('nombre', 'asc')->paginate(10);

        return view('livewire.mostrar-confirmacion', ['confirmaciones'=>$confirmaciones]);
    }
}
