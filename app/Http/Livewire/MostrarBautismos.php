<?php

namespace App\Http\Livewire;

use App\Models\Bautismos;
use Livewire\Component;
use Livewire\WithPagination;

class MostrarBautismos extends Component
{

  use WithPagination;
 
    public $nombre;
    public $cedulaMadre;
    public $cedulaPadre;
    public $fechaNacimiento;

  public function buscar($nombre, $cedulaMadre, $cedulaPadre, $fechaNacimiento)
  {
    $this->nombre = $nombre;
    $this->cedulaMadre = $cedulaMadre;
    $this->cedulaPadre = $cedulaPadre;
    $this->fechaNacimiento = $fechaNacimiento;
  
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
        ->when($this->fechaNacimiento, function($query) {
          $query->where('fecha_nacimiento', $this->fechaNacimiento);
        })
        ->orderBy('nombre')->paginate(10);

        return view('livewire.mostrar-bautismos', [
          'bautismos' => $bautismos 
        ]);
    }
}
