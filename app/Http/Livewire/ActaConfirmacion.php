<?php

namespace App\Http\Livewire;

use App\Models\Confirmacion;
use App\Models\Parroquiaz;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ActaConfirmacion extends Component
{

    //Validaciones 

    public $libro_confirmacion;
    public $folio_confirmacion;
    public $no_confirmacion;  
    public $celebrante;
    public $parroquia_id; 
    public $fecha_celebracion; 
    public $nombre; 
    public $apellidos;
    public $edad; 
    public $nombre_madre;
    public $nombre_padre;  
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
        'nombre_madre'=>'',
        'nombre_padre'=>'',  
        'padrinos'=>'',
        'notas'=>'',
    ];

    public function crearConfirmacion(){
        $datos = $this->validate();

        //Guardar 

        Confirmacion::create([

                    'libro_confirmacion'=>$datos['libro_confirmacion'],
                    'folio_confirmacion'=>$datos['folio_confirmacion'],
                    'no_confirmacion'=>$datos['no_confirmacion'],  
                    'celebrante'=>$datos['celebrante'],
                    'parroquia_id'=>$datos['parroquia_id'], 
                    'fecha_celebracion'=>$datos['fecha_celebracion'], 
                    'nombre'=>$datos['nombre'], 
                    'apellidos'=>$datos['apellidos'],
                    'edad'=>$datos['edad'], 
                    'nombre_madre'=>$datos['nombre_madre'],
                    'nombre_padre'=>$datos['nombre_padre'],  
                    'padrinos'=>$datos['padrinos'],
                    'notas'=>$datos['notas'],

        ]);

        //Crear un mensaje antes de redireccionar 

        session()->flash('mensaje', 'El Acta se guardó correctamente');

        //Redireccionar

        return redirect()->route('menu.confirmacion.create');

    }

    public function render()
    {
        $parroquias = Parroquiaz::all();

        return view('livewire.acta-confirmacion',['parroquias'=>$parroquias]);
    }
}
