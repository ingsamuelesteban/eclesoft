<?php

namespace App\Http\Livewire;

use App\Models\Decretos;
use Livewire\Component;
use Livewire\WithPagination;

class MostrarDecretos extends Component
{
    use WithPagination;

    public $nombre;
    public $fechaNacimiento;
    public $fechaSolicitud;

    public function buscar($nombre, $fechaNacimiento, $fechaSolicitud)
    {
        $this->nombre = $nombre;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->fechaSolicitud = $fechaSolicitud;
    }

    protected $listeners = ['eliminarDecreto', 'criteriosBusqueda' => 'buscar'];

    public function eliminarDecreto(Decretos $decreto){
        $decreto->delete();
    }

    public function render()
    {
        $decretos = Decretos::when($this->nombre, function ($query) { $query->where('nombre', 'LIKE', "%" . $this->nombre . "%");
        })
        ->when($this->fechaNacimiento, function($query) { $query->where('fecha_nacimiento', $this->fechaNacimiento);
        })
        ->when($this->fechaSolicitud, function($query) { $query->where('created_at', $this->fechaSolicitud);
        })
        ->orderBy('id', 'desc')
        ->paginate(10);

        return view('livewire.mostrar-decretos', ['decretos' =>$decretos]);
    }

}
