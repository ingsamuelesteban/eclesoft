<?php

namespace App\Http\Livewire;

use App\Models\Diocesi;
use Livewire\Component;
use Livewire\WithFileUploads;

class Diocesis extends Component
{

    public $nombre;
    public $obispo;
    public $titulo;
    public $canciller;
    public $vicario_general;
    public $firma;
    public $calle;
    public $ciudad;
    public $provincia;
    public $telefono;
    public $rnc;
    public $correo;
    public $logo;

    use WithFileUploads;

    protected $rules = [
        'nombre'=>'',
        'obispo'=>'',
        'titulo'=>'',
        'canciller'=>'',
        'vicario_general'=>'',
        'firma'=>'',
        'calle'=>'',
        'ciudad'=>'',
        'provincia'=>'',
        'telefono'=>'',
        'rnc'=>'',
        'correo'=>'',
        'logo'=>'image',
    ];

    public function crearDiocesis(){
        $datos = $this->validate();

        // Almacenar imagen 
       $logo = $this->logo->store('public/img');
        $nombre_logo = str_replace('public/img/', '', $logo);

        Diocesi::create([
            'nombre'=>$datos['nombre'],
            'obispo'=>$datos['obispo'],
            'titulo'=>$datos['titulo'],
            'canciller'=>$datos['canciller'],
            'vicario_general'=>$datos['vicario_general'],
            'firma'=>$datos['canciller'],
            'calle'=>$datos['calle'],
            'ciudad'=>$datos['ciudad'],
            'provincia'=>$datos['provincia'],
            'telefono'=>$datos['telefono'],
            'rnc'=>$datos['rnc'],
            'correo'=>$datos['correo'],
            'logo'=> $nombre_logo,

        ]);
        //Mensaje 
        session()->flash('mensaje', 'Diócesis Configurada Correctamente');

        //Redireccionar 
        return redirect()->route('menu.index');

    }
    
    public function render()
    {
        return view('livewire.diocesis');
    }
}
