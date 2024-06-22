<?php

namespace App\Http\Livewire;

use App\Models\Bautismos;
use App\Models\Decretos;
use Livewire\Component;

class EditarDecreto extends Component
{
    public $bautismo_id;
    public $decreto_id;
    public $nombre;
    public $genero;
    public $fecha_nacimiento;
    public $lugar_nacimiento;
    public $folio_nacimiento;
    public $libro_nacimiento;
    public $acta_nacimiento;
    public $ano_nacimiento;
    public $circunscripcion_nacimiento;
    public $nombre_madre;
    public $cedula_madre;
    public $nombre_padre;
    public $cedula_padre;
    public $nombre_madrina;
    public $nombre_padrino;
    public $nombre_civil;
    public $genero_civil;
    public $fecha_nacimiento_civil;
    public $lugar_nacimiento_civil;
    public $folio_nacimiento_civil;
    public $libro_nacimiento_civil;
    public $acta_nacimiento_civil;
    public $ano_nacimiento_civil;
    public $circunscripcion_nacimiento_civil;
    public $nombre_madre_civil;
    public $cedula_madre_civil;
    public $nombre_padre_civil;
    public $cedula_padre_civil;
    public $nombre_madrina_civil;
    public $nombre_padrino_civil;


    protected $rules = [
        

        'bautismo_id' => '',
        'decreto_id' => '',
        'nombre' => '',
        'nombre_civil' => '',
        'genero' => '',
        'genero_civil' => '',
        'fecha_nacimiento' => '',
        'fecha_nacimiento_civil' => '',
        'lugar_nacimiento' => '',
        'lugar_nacimiento_civil' => '',
        'libro_nacimiento' => '',
        'libro_nacimiento_civil' => '',
        'folio_nacimiento' => '',
        'folio_nacimiento_civil' => '',
        'acta_nacimiento' => '',
        'acta_nacimiento_civil' => '',
        'ano_nacimiento' => '',
        'ano_nacimiento_civil' => '',
        'circunscripcion_nacimiento' => '',
        'circunscripcion_nacimiento_civil' => '',
        'nombre_madre' => '',
        'nombre_madre_civil' => '',
        'cedula_madre' => '',
        'cedula_madre_civil' => '',
        'nombre_padre' => '',
        'nombre_padre_civil' => '',
        'cedula_padre' => '',       
        'cedula_padre_civil' => '',
        'nombre_madrina' => '',
        'nombre_madrina_civil' => '',
        'nombre_padrino' => '',
        'nombre_padrino_civil' => '',
    ]; 

    public function mount(Decretos $decreto)
    {
        $this->bautismo_id = $decreto->bautismo_id;
        $this->decreto_id = $decreto->id;
        $this->nombre = $decreto->nombre;
        $this->nombre_civil = $decreto->nombre_civil;
        $this->genero = $decreto->genero;
        $this->genero_civil = $decreto->genero_civil;
        $this->fecha_nacimiento = $decreto->fecha_nacimiento;
        $this->fecha_nacimiento_civil = $decreto->fecha_nacimiento_civil;
        $this->lugar_nacimiento = $decreto->lugar_nacimiento;
        $this->lugar_nacimiento_civil = $decreto->lugar_nacimiento_civil;
        $this->libro_nacimiento = $decreto->libro_nacimiento;
        $this->libro_nacimiento_civil = $decreto->libro_nacimiento_civil;
        $this->folio_nacimiento = $decreto->folio_nacimiento;
        $this->folio_nacimiento_civil = $decreto->folio_nacimiento_civil;
        $this->acta_nacimiento = $decreto->acta_nacimiento;
        $this->acta_nacimiento_civil = $decreto->acta_nacimiento_civil;
        $this->ano_nacimiento = $decreto->ano_nacimiento;
        $this->ano_nacimiento_civil = $decreto->ano_nacimiento_civil;
        $this->circunscripcion_nacimiento = $decreto->circunscripcion_nacimiento;
        $this->circunscripcion_nacimiento_civil = $decreto->circunscripcion_nacimiento_civil;
        $this->nombre_madre = $decreto->nombre_madre;
        $this->nombre_madre_civil = $decreto->nombre_madre_civil;
        $this->cedula_madre = $decreto->cedula_madre;
        $this->cedula_madre_civil = $decreto->cedula_madre_civil;
        $this->nombre_padre = $decreto->nombre_padre;
        $this->nombre_padre_civil = $decreto->nombre_padre_civil;
        $this->cedula_padre = $decreto->cedula_padre;
        $this->cedula_padre_civil = $decreto->cedula_padre_civil;
        $this->nombre_madrina = $decreto->nombre_madrina;
        $this->nombre_madrina_civil = $decreto->nombre_madrina_civil;
        $this->nombre_padrino = $decreto->nombre_padrino;
        $this->nombre_padrino_civil = $decreto->nombre_padrino_civil;

    }

    public function editarDecreto(){
        
        $datos = $this->validate();
        
        //Encontrar el acta a editar
        $decreto = Decretos::find($this->decreto_id);

        $decreto->nombre = $datos['nombre'];
        $decreto->genero = $datos['genero'];
        $decreto->fecha_nacimiento = $datos['fecha_nacimiento'];
        $decreto->nombre_madre = $datos['nombre_madre'];
        $decreto->lugar_nacimiento = $datos['lugar_nacimiento'];
        $decreto->libro_nacimiento = $datos['libro_nacimiento'];
        $decreto->libro_nacimiento_civil = $datos['libro_nacimiento_civil'];
        $decreto->folio_nacimiento = $datos['folio_nacimiento'];
        $decreto->folio_nacimiento_civil = $datos['folio_nacimiento_civil'];
        $decreto->acta_nacimiento = $datos['acta_nacimiento'];
        $decreto->acta_nacimiento_civil = $datos['acta_nacimiento_civil'];
        $decreto->ano_nacimiento = $datos['ano_nacimiento'];
        $decreto->ano_nacimiento_civil =$datos['ano_nacimiento_civil'];
        $decreto->circunscripcion_nacimiento = $datos['circunscripcion_nacimiento'];
        $decreto->circunscripcion_nacimiento_civil =$datos ['circunscripcion_nacimiento_civil'];
        $decreto->nombre_padre = $datos['nombre_padre'];
        $decreto->cedula_madre = $datos['cedula_madre'];
        $decreto->nombre_madrina = $datos['nombre_madrina'];
        $decreto->cedula_padre = $datos['cedula_padre'];
        $decreto->nombre_civil = $datos['nombre_civil'];
        $decreto->nombre_padrino = $datos['nombre_padrino'];
        $decreto->fecha_nacimiento_civil = $datos['fecha_nacimiento_civil'];
        $decreto->genero_civil = $datos['genero_civil'];
        $decreto->nombre_madre_civil = $datos['nombre_madre_civil'];
        $decreto->lugar_nacimiento_civil = $datos['lugar_nacimiento_civil'];
        $decreto->nombre_padre_civil = $datos['nombre_padre_civil'];
        $decreto->cedula_madre_civil = $datos['cedula_madre_civil'];
        $decreto->nombre_madrina_civil = $datos['nombre_madrina_civil'];
        $decreto->cedula_padre_civil = $datos['cedula_padre_civil']; 
        $decreto->nombre_padrino_civil = $datos['nombre_padrino_civil'];

          //Guardar el acta modificada 

          $decreto->save();

          //Redireccionar al usuario 
  
          session()->flash('mensaje', 'El Decreto se modificó Correctamente');
  
          return redirect()->route('menu.decretos.show',[$decreto->id]);
    }

    public function render()
    {
        return view('livewire.editar-decreto');
    }
}
