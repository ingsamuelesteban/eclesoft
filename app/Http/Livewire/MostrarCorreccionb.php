<?php

namespace App\Http\Livewire;

use App\Models\Correccionb;
use Livewire\Component;
use Livewire\WithPagination;

class MostrarCorreccionb extends Component
{
    use WithPagination;

    public $nombre_bautizado;
    public $fecha_solicitud;
    public $parroquia;
    public $fecha_emision;

    public function buscar($nombre_bautizado, $fecha_solicitud, $fecha_emision, $parroquia){
        $this->nombre_bautizado = $nombre_bautizado;
        $this->fecha_solicitud = $fecha_solicitud;
        $this->fecha_emision = $fecha_emision;
        $this->parroquia = $parroquia;
    }

    protected $listeners = ['eliminarCorreccionb', 'criteriosBusqueda', 'buscar'];

    public function eliminarCorreccionb(Correccionb $correccionb){
        $correccionb -> delete();
    }

    public function render()
    {
        $correccionbs = Correccionb::when($this->nombre_bautizado, function($query){
            $query->where('bautizado', 'LIKE', '%' . $this->nombre_bautizado . '%');
        })
        ->when($this->fecha_solicitud, function($query) {
            $query->where('fecha_solicitud', $this->fecha_solicitud);
        })
        ->when($this->fecha_emision, function($query) {
            $query->where('created_at', $this->fecha_emision);
        })
        ->when($this->parroquia, function($query){
            $query->where('parroquia_id', $this->parroquia);
        })->orderBy('fecha_solicitud', 'asc')->paginate(10);


        return view('livewire.mostrar-correccionb', ['correccionbs' => $correccionbs]);
    }
}
