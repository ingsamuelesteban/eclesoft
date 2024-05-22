<?php

namespace App\Http\Livewire;

use App\Models\Bautismos;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class EditarBautismo extends Component
{
    public $bautismo_id;
    public $libro_bautismo;
    public $folio_bautismo;
    public $no_bautismo;
    public $nombre;
    public $genero;
    public $fecha_nacimiento;
    public $lugar_nacimiento;
    public $nombre_madre;
    public $cedula_madre;
    public $nombre_padre;
    public $cedula_padre;
    public $nombre_madrina;
    public $nombre_padrino;
    public $no_libro;
    public $folio;
    public $no_declaracion;
    public $año;
    public $circunscripcion;
    public $oficialia;
    public $parroquia;
    public $ub_parroquia;
    public $celebrante_name;
    public $fecha_celebracion;
    public $notas;
    public $comunidades;

    protected $rules = [
        
        'nombre' => 'required|string',
        'genero' => 'required',
        'fecha_nacimiento' => 'required',
        'lugar_nacimiento' => 'required|string',
        'nombre_madre' => 'required|string',
        'cedula_madre' => 'required',
        'nombre_padre' => 'required|string',
        'cedula_padre' => 'required',
        'nombre_madrina' => 'required|string',
        'nombre_padrino' => 'required|string',
        'no_libro' => 'required',
        'folio' => 'required',
        'no_declaracion' => 'required|string',
        'año' => 'required|string',
        'circunscripcion' => 'required|string',
        'oficialia' => 'required|string',
        'parroquia' => 'required',
        'ub_parroquia' => 'required|string',
        'celebrante_name' => 'required|string',
        'fecha_celebracion' => 'required',
        'notas' => 'nullable|string',
        'libro_bautismo'=>'required|string',
        'folio_bautismo'=>'required|string',
        'no_bautismo'=>'required|string',

    ]; 


    public function mount(Bautismos $bautismo)
    {
        $this->bautismo_id = $bautismo->id;
        $this->libro_bautismo = $bautismo->libro_bautismo;
        $this->folio_bautismo = $bautismo->folio_bautismo;
        $this->no_bautismo = $bautismo->no_bautismo;
        $this->nombre = $bautismo->nombre;
        $this->genero = $bautismo->genero;
        $this->fecha_nacimiento = $bautismo->fecha_nacimiento;
        $this->lugar_nacimiento = $bautismo->lugar_nacimiento;
        $this->nombre_madre = $bautismo->nombre_madre;
        $this->cedula_madre = $bautismo->cedula_madre;
        $this->nombre_padre = $bautismo->nombre_padre;
        $this->cedula_padre = $bautismo->cedula_padre;
        $this->nombre_madrina = $bautismo->nombre_madrina;
        $this->nombre_padrino = $bautismo->nombre_padrino;
        $this->no_libro = $bautismo->no_libro;
        $this->folio = $bautismo->folio;
        $this->no_declaracion = $bautismo->no_declaracion;
        $this->año = $bautismo->año;
        $this->circunscripcion = $bautismo->circunscripcion;
        $this->oficialia = $bautismo->oficialia;
        $this->parroquia = $bautismo->parroquia;
        $this->ub_parroquia = $bautismo->ub_parroquia;
        $this->celebrante_name = $bautismo->celebrante;
        $this->fecha_celebracion = $bautismo->fecha_celebracion;
        $this->notas = $bautismo->notas;

    }

    public function editarBautismo()
    {
        $datos = $this->validate();
        
        //Encontrar el acta a editar
        $bautismo = Bautismos::find($this->bautismo_id);

        //Asiganar los valores editados
        $bautismo->libro_bautismo = $datos['libro_bautismo'];
        $bautismo->folio_bautismo = $datos['folio_bautismo'];
        $bautismo->no_bautismo = $datos['no_bautismo'];
        $bautismo->nombre = $datos['nombre'];
        $bautismo->genero = $datos['genero'];
        $bautismo->fecha_nacimiento = $datos['fecha_nacimiento'];
        $bautismo->lugar_nacimiento = $datos['lugar_nacimiento'];
        $bautismo->nombre_madre = $datos['nombre_madre'];
        $bautismo->cedula_madre = $datos['cedula_madre'];
        $bautismo->nombre_padre = $datos['nombre_padre'];
        $bautismo->cedula_padre = $datos['cedula_padre'];
        $bautismo->nombre_madrina = $datos['nombre_madrina'];
        $bautismo->nombre_padrino = $datos['nombre_padrino'];
        $bautismo->no_libro = $datos['no_libro'];
        $bautismo->folio = $datos['folio'];
        $bautismo->no_declaracion = $datos['no_declaracion'];
        $bautismo->año = $datos['año'];
        $bautismo->circunscripcion = $datos['circunscripcion'];
        $bautismo->oficialia = $datos['oficialia'];
        $bautismo->parroquia = $datos['parroquia'];
        $bautismo->ub_parroquia = $datos['ub_parroquia'];
        $bautismo->celebrante = $datos['celebrante_name'];
        $bautismo->fecha_celebracion = $datos['fecha_celebracion'];
        $bautismo->notas = $datos['notas'];

        //Guardar el acta modificada 

        $bautismo->save();

        //Redireccionar al usuario 

        session()->flash('mensaje', 'El Acta se modificó Correctamente');

        return redirect()->route('menu.bautismos.show', ['bautismo' => $bautismo]);


    }

    public function render()
    {
      
       
        
        return view('livewire.editar-bautismo'
        );
    }
}
