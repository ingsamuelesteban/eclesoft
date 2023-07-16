<?php

namespace App\Http\Livewire;

use App\Models\NoBautizado;
use Livewire\Component;
use Livewire\WithPagination;

class MostrarNoBautizado extends Component
{
    use WithPagination;

    public $nombre;
    public $nombre_madre;
    public $cedula_madre;
    public $nombre_padre;
    public $cedula_padre;

    public function buscar($nombre, $nombre_madre, $cedula_madre, $nombre_padre, $cedula_padre)
    {
        $this->nombre = $nombre;
        $this->nombre_madre = $nombre_madre;
        $this->cedula_madre = $cedula_madre;
        $this->nombre_padre = $nombre_padre;
        $this->cedula_padre = $cedula_padre;
    }

    protected $listeners = [ 'eliminarNoBautizado', 'criteriosBusqueda' => 'buscar'];

    public function eliminarNoBautizado(NoBautizado $noBautizado)
    {
        $noBautizado->delete();
    }

    public function render()
    {
        $noBautizados = NoBautizado::when($this->nombre, function($query) {
            $query->where('nombre', 'LIKE', "%" . $this->nombre . "%");
          })
          ->when($this->nombre_madre, function($query) {
              $query->where('nombre_madre', 'LIKE', "%" . $this->nombre_madre . "%");
          })
          ->when($this->cedula_madre, function($query) {
            $query->where('cedula_madre', $this->cedula_madre);
          })
          ->when($this->nombre_padre, function($query) {
            $query->where('nombre_padre', $this->nombre_padre);
          })
          ->when($this->cedula_padre, function($query) {
              $query->where('cedula_padre', $this->cedula_padre);
            })->orderBy('id', 'desc')->paginate(10)
          ;
        return view('livewire.mostrar-no-bautizado', ['nobautizados' => $noBautizados]);
    }
}
