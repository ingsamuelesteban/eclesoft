<?php

namespace App\Http\Livewire;

use App\Models\Bautismos;
use Livewire\Component;

class MostrarBautismos extends Component
{
 
    public $nombre;
    public $cedulaMadre;
    public $cedulaPadre;

  public function buscar($nombre, $cedulaMadre, $cedulaPadre)
  {
    $this->nombre = $nombre;
    $this->cedulaMadre = $cedulaMadre;
    $this->cedulaPadre = $cedulaPadre;
  
  }


  protected $listeners = ['eliminarBautismo', 'criteriosBusqueda' => 'buscar'];

  public function eliminarBautismo(Bautismos $bautismo)
  {
    $bautismo->delete();
  }

    public function render()
    {
        $bautismos = Bautismos::when($this->nombre, function($query) {
          $query->where('nombre', 'LIKE', "%" . $this->nombre . "%");
        })
        ->when($this->cedulaMadre, function($query) {
          $query->where('cedula_madre', $this->cedulaMadre);
        })
        ->when($this->cedulaPadre, function($query) {
          $query->where('cedula_padre', $this->cedulaPadre);
        })
        ->paginate(10);

        return view('livewire.mostrar-bautismos', [
          'bautismos' => $bautismos 
        ]);
    }
}
