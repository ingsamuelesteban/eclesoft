<?php

namespace App\Http\Livewire;

use App\Models\Decretosm;
use Livewire\Component;
use Livewire\WithPagination;

class MostrarDecretosm extends Component
{
    use WithPagination;

    public $nombre_esposa;
    public $nombre_esposo;
    public $cedula_esposa;
    public $cedula_esposo;
    public $fecha_creado;

    public function buscar($nombre_esposa, $nombre_esposo, $cedula_esposa, $cedula_esposo, $fecha_creado)
    {
        $this->nombre_esposa = $nombre_esposa;
        $this->nombre_esposo = $nombre_esposo;
        $this->cedula_esposa = $cedula_esposa;
        $this->cedula_esposo = $cedula_esposo;
        $this->fecha_creado = $fecha_creado;
    }

    protected $listeners = ['eliminarDecretom', 'criteriosBusqueda' => 'buscar'];

    public function eliminarDecretom(Decretosm $decretom){
        $decretom->delete();
    }

    public function render()
    {
        $decretosm = Decretosm::when($this->nombre_esposa, function ($query) { $query->where('nombre_esposa', 'LIKE', "%" . $this->nombre_esposa . "%");
        })
        ->when($this->nombre_esposo, function ($query) { $query->where('nombre_esposo', 'LIKE', "%" . $this->nombre_esposo . "%");
        })
        ->when($this->cedula_esposa, function($query) { $query->where('cedula_esposo', $this->cedula_esposa);
        })
        ->when($this->cedula_esposo, function($query) { $query->where('cedula_esposo', $this->cedula_esposo);
        })
        ->when($this->fecha_creado, function($query) { $query->where('created_at', 'LIKE', "%" .  $this->fecha_creado . "%");
        })
        ->orderBy('id', 'desc')
        ->paginate(10);

        return view('livewire.mostrar-decretosm', ['decretosm' =>$decretosm]);
    }
}
