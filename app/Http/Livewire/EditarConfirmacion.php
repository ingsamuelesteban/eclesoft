<?php

namespace App\Http\Livewire;

use App\Models\Confirmacion;
use App\Models\Parroquiaz;
use Livewire\Component;

class EditarConfirmacion extends Component
{
    public $confirmacion_id;
    public $libro_confirmacion;
    public $folio_confirmacion;
    public $no_confirmacion;  
    public $celebrante;
    public $parroquia_id; 
    public $fecha_celebracion; 
    public $nombre; 
    public $apellidos;
    public $edad; 
    public $sexo; 
    public $nombre_madre;
    public $nombre_padre;  
    public $sexo_padrinos;
    public $padrinos;
    public $notas;

    protected $rules = [

        'libro_confirmacion'=>'',
        'folio_confirmacion'=>'',
        'no_confirmacion'=>'',  
        'celebrante'=>'',
        'parroquia_id'=>'', 
        'fecha_celebracion'=>'date', 
        'nombre'=>'', 
        'apellidos'=>'',
        'edad'=>'', 
        'sexo'=>'', 
        'nombre_madre'=>'',
        'nombre_padre'=>'',  
        'sexo_padrinos'=>'',
        'padrinos'=>'',
        'notas'=>'',
    ];

    public function mount(Confirmacion $confirmacion){
       $this-> confirmacion_id = $confirmacion->id;
       $this-> libro_confirmacion = $confirmacion->libro_confirmacion;
        $this -> folio_confirmacion = $confirmacion->folio_confirmacion;
        $this->no_confirmacion = $confirmacion->no_confirmacion;
       $this-> celebrante = $confirmacion->celebrante;
       $this-> parroquia_id = $confirmacion->parroquia_id;
       $this-> fecha_celebracion = $confirmacion->fecha_celebracion;
       $this-> nombre = $confirmacion->nombre;
       $this-> apellidos = $confirmacion->apellidos;
       $this-> edad = $confirmacion->edad;
       $this-> sexo = $confirmacion->sexo;
       $this-> nombre_madre = $confirmacion->nombre_madre;
       $this-> nombre_padre = $confirmacion->nombre_padre;
       $this-> sexo_padrinos = $confirmacion->sexo_padrinos;
       $this-> padrinos = $confirmacion->padrinos;
       $this-> notas = $confirmacion->notas;
    }

    public function editarConfirmacion(){
        $datos = $this->validate();

        $confirmacion = Confirmacion::find($this->confirmacion_id);

        $confirmacion-> libro_confirmacion = $datos['libro_confirmacion'];
        $confirmacion -> folio_confirmacion = $datos['folio_confirmacion'];
        $confirmacion->no_confirmacion = $datos['no_confirmacion'];
       $confirmacion-> celebrante = $datos['celebrante'];
       $confirmacion-> parroquia_id = $datos['parroquia_id'];
       $confirmacion-> fecha_celebracion = $datos['fecha_celebracion'];
       $confirmacion-> nombre = $datos['nombre'];
       $confirmacion-> apellidos = $datos['apellidos'];
       $confirmacion-> edad = $datos['edad'];
       $confirmacion-> sexo = $datos['sexo'];
       $confirmacion-> nombre_madre = $datos['nombre_madre'];
       $confirmacion-> nombre_padre = $datos['nombre_padre'];
       $confirmacion-> sexo_padrinos = $datos['sexo_padrinos'];
       $confirmacion-> padrinos = $datos['padrinos'];
       $confirmacion-> notas = $datos['notas'];

       $confirmacion->save();

       session()->flash('mensaje', 'El Acta se modificó correctamente');

       return redirect()->route('menu.confirmacion.show', ['confirmacion'=>$confirmacion]);
    }
    
    public function render()
    {
        $parroquias = Parroquiaz::all();
        return view('livewire.editar-confirmacion', ['parroquias'=>$parroquias]);
    }
}
