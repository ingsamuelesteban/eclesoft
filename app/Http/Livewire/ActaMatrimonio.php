<?php

namespace App\Http\Livewire;

use App\Models\Matrimonios;
use Livewire\Component;

class ActaMatrimonio extends Component
{

    //Reglas o validaciones

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

    public function crearMatrimonio(){
        $datos = $this->validate();

        // Guardar 

        Matrimonios::create([

            'libro_matrimonio' => $datos['libro_matrimonio'],
            'folio_matrimonio' => $datos['folio_matrimonio'],
            'no_matrimonio' => $datos['no_matrimonio'],
            'fecha_celebracion'=> $datos['fecha_celebracion'],
            'celebrante_name' => $datos['celebrante_name'], 
            'nombre_esposo' => $datos['nombre_esposo'],
            'documento_esposo' => $datos['documento_esposo'],
            'nombre_esposa' => $datos['nombre_esposa'],
            'documento_esposa' => $datos['documento_esposa'],
            'nombre_padrino' => $datos['nombre_padrino'],
            'documento_padrino' => $datos['documento_padrino'],
            'nombre_madrina' => $datos['nombre_madrina'],
            'documento_madrina' => $datos['documento_madrina'],
            'fecha_transcripcion' => $datos['fecha_transcripcion'],
            'no_libro' => $datos['no_libro'],
            'folio' => $datos['folio'],
            'no_transcripcion' => $datos['no_transcripcion'],
        ]);

                //Crear un mensaje antes de redireccionar 

                session()->flash('mensaje', 'El matrimonio se guardó correctamente');

                //Redireccionar
        
                return redirect()->route('menu.matrimonios.create');

    }
    
                public function render()
    
    {
        return view('livewire.acta-matrimonio');
    }
}
