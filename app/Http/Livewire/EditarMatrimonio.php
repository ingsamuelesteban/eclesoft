<?php

namespace App\Http\Livewire;

use App\Models\Matrimonios;
use Livewire\Component;

class EditarMatrimonio extends Component
{
    //Reglas o validaciones

    public $matrimonio_id;
    public $libro_matrimonio;
    public $folio_matrimonio;
    public $no_matrimonio;
    public $fecha_celebracion;
    public $celebrante_name; 
    public $nombre_esposo;
    public $documento_esposo;
    public $nombre_esposa;
    public $documento_esposa;
    public $nombre_padrino;
    public $documento_padrino;
    public $nombre_madrina;
    public $documento_madrina;
    public $fecha_transcripcion;
    public $no_libro;
    public $folio;
    public $no_transcripcion;

protected $rules = [
    'libro_matrimonio' => 'required|string',
    'folio_matrimonio' => 'required|string',
    'no_matrimonio' => 'required|string',
    'fecha_celebracion' => 'required|string',
    'celebrante_name' => 'required|string', 
    'nombre_esposo' => 'required|string',
    'documento_esposo' => 'required|string',
    'nombre_esposa' => 'required|string',
    'documento_esposa' =>'required|string',
    'nombre_padrino' => 'required|string',
    'documento_padrino' => 'required|string',
    'nombre_madrina' => 'required|string',
    'documento_madrina' => 'required|string',
    'fecha_transcripcion' => 'required|string',
    'no_libro' => 'required|string',
    'folio' => 'required|string',
    'no_transcripcion' => 'required|string',
];

public function mount(Matrimonios $matrimonio)
{
    $this->matrimonio_id = $matrimonio->id;
    $this->libro_matrimonio = $matrimonio->libro_matrimonio;
    $this->folio_matrimonio = $matrimonio->folio_matrimonio;
    $this->no_matrimonio = $matrimonio->no_matrimonio;
    $this->fecha_celebracion = $matrimonio->fecha_celebracion;
    $this->celebrante_name = $matrimonio->celebrante_name;
    $this->nombre_esposo = $matrimonio->nombre_esposo;
    $this->documento_esposo = $matrimonio->documento_esposo;
    $this->nombre_esposa = $matrimonio->nombre_esposa;
    $this->documento_esposa = $matrimonio->documento_esposa;
    $this->nombre_padrino = $matrimonio->nombre_padrino;
    $this->documento_padrino = $matrimonio->documento_padrino;
    $this->nombre_madrina = $matrimonio->nombre_madrina;
    $this->documento_madrina = $matrimonio->documento_madrina;
    $this->fecha_transcripcion = $matrimonio->fecha_transcripcion;
    $this->no_libro = $matrimonio->no_libro;
    $this->folio = $matrimonio->folio;
    $this->no_transcripcion = $matrimonio->no_transcripcion;
}

public function editarMatrimonio()
{
    $datos = $this->validate();

    //Encontrar el acta a editar
    $matrimonio = Matrimonios::find($this->matrimonio_id);

    //Asiganar los valores editados
    $matrimonio->libro_matrimonio = $datos['libro_matrimonio'];
    $matrimonio->folio_matrimonio = $datos['folio_matrimonio'];
    $matrimonio->no_matrimonio = $datos['no_matrimonio'];
    $matrimonio->fecha_celebracion = $datos['fecha_celebracion'];
    $matrimonio->celebrante_name = $datos['celebrante_name'];
    $matrimonio->nombre_esposo = $datos['nombre_esposo'];
    $matrimonio->documento_esposo = $datos['documento_esposo'];
    $matrimonio->nombre_esposa = $datos['nombre_esposa'];
    $matrimonio->documento_esposa = $datos['documento_esposa'];
    $matrimonio->nombre_padrino = $datos['nombre_padrino'];
    $matrimonio->documento_padrino = $datos['documento_padrino'];
    $matrimonio->nombre_madrina = $datos['nombre_madrina'];
    $matrimonio->documento_madrina = $datos['documento_madrina'];
    $matrimonio->fecha_transcripcion = $datos['fecha_transcripcion'];
    $matrimonio->no_libro = $datos['no_libro'];
    $matrimonio->folio = $datos['folio'];
    $matrimonio->no_transcripcion = $datos['no_transcripcion'];

    //Guardar las modificaciones

    $matrimonio->save();

    //Redireccionar y mostrar mensaje

    session()->flash('mensaje', 'El Acta se modificó Correctamente');

        return redirect()->route('menu.matrimonios.create');
}

    public function render()
    {
        return view('livewire.editar-matrimonio');
    }
}
