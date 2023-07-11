<?php

namespace App\Http\Livewire;

use App\Models\Bautismos;
use Livewire\Component;
use Livewire\WithPagination;

class MostrarBautismos extends Component
{

  use WithPagination;
 
    public $nombre;
    public $nombreMadre;
    public $nombrePadre;
    public $fechaNacimiento;

  public function buscar($nombre, $nombreMadre, $nombrePadre, $fechaNacimiento)
  {
    $this->nombre = $nombre;
    $this->nombreMadre = $nombreMadre;
    $this->nombrePadre = $nombrePadre;
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
        ->when($this->nombreMadre, function($query) {
          $query->where('nombre_madre', 'LIKE', "%" . $this->nombreMadre . "%");
        })
        ->when($this->nombrePadre, function($query) {
          $query->where('nombre_padre', 'LIKE', "%" . $this->nombrePadre . "%");
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
