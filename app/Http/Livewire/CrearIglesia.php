<?php

namespace App\Http\Livewire;

use App\Models\Parroquias;
use App\Models\Parroquiaz;
use Livewire\Component;

class CrearIglesia extends Component
{

    public $parroquia;
    public $telefonop;
    public $rnc;
    public $parroco;
    public $vicario;
    public $calle;
    public $ciudad;
    public $provincia;
    public $correo;

    protected $rules = [
        'parroquia'=>'string',
        'telefonop'=>'string',
        'rnc'=>'string',
        'parroco'=>'string',
        'vicario'=>'string',
        'calle' => 'string',
        'ciudad' => 'string',
        'provincia' => 'string',
        'correo'=>'string',
    ];

    public function crearIglesia(){
        $datos = $this->validate();

       
        Parroquiaz::create([
            'parroquia'=>$datos['parroquia'],
            'telefonop'=>$datos['telefonop'],
            'rnc'=>$datos['rnc'],
            'parroco'=>$datos['parroco'],
            'vicario'=>$datos['vicario'],
            'calle'=>$datos['calle'],
            'ciudad'=>$datos['ciudad'],
            'provincia'=>$datos['provincia'],
            'correo'=>$datos['correo'],

        ]);
        //Mensaje 
        session()->flash('mensaje', 'Parroquia Agregada Correctamente');

        //Redireccionar 
        return redirect()->route('menu.parroquias.create');

    }

    public function render()
    {
        return view('livewire.crear-iglesia');
    }
}
