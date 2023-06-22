<?php

namespace App\Http\Livewire;

use App\Models\Matrimonios;
use Livewire\Component;
use Livewire\WithPagination;

class MostrarMatrimonios extends Component
{

    use WithPagination;
 
    public $nombre_esposo;
    public $nombre_esposa;
    public $documento_esposo;
    public $documento_esposa;
    public $fecha_celebracion;

  public function buscar($nombre_esposo, $nombre_esposa, $documento_esposo, $documento_esposa, $fecha_celebracion)
  {
    $this->nombre_esposo = $nombre_esposo;
    $this->nombre_esposa = $nombre_esposa;
    $this->documento_esposo = $documento_esposo;
    $this->documento_esposa = $documento_esposa;
    $this->fecha_celebracion = $fecha_celebracion;
  
  }


  protected $listeners = ['eliminarMatrimonio', 'criteriosBusqueda' => 'buscar'];

  public function eliminarMatrimonio(Matrimonios $matrimonio)
  {
    $matrimonio->delete();
  }

    public function render()
    {

   
    
        $matrimonios = Matrimonios::when($this->nombre_esposo, function($query) {
          $query->where('nombre_esposo', 'LIKE', "%" . $this->nombre_esposo . "%");
        })
        ->when($this->nombre_esposa, function($query) {
            $query->where('nombre_esposa', 'LIKE', "%" . $this->nombre_esposa . "%");
        })
        ->when($this->documento_esposo, function($query) {
          $query->where('documento_esposo', $this->documento_esposo);
        })
        ->when($this->documento_esposa, function($query) {
          $query->where('documento_esposa', $this->documento_esposa);
        })
        ->when($this->fecha_celebracion, function($query) {
            $query->where('fecha_celebracion', $this->fecha_celebracion);
          })->orderBy('fecha_celebracion')->paginate(1)
        ;

        return view('livewire.mostrar-matrimonios', [
          'matrimonios' => $matrimonios 
        ]);
    }
}
