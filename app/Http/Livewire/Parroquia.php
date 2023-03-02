<?php

namespace App\Http\Livewire;

use App\Models\Parroquia as ModelsParroquia;
use Livewire\Component;
use Livewire\WithFileUploads;

class Parroquia extends Component
{
    public $diocesis;
    public $obispo;
    public $parroquia;
    public $telefonop;
    public $parroco;
    public $vicario;
    public $calle;
    public $ciudad;
    public $provincia;
    public $logo;

    use WithFileUploads;

    protected $rules = [
        'diocesis'=>'required|string',
        'obispo'=>'required|string',
        'parroquia'=>'required|string',
        'telefonop'=>'required|string',
        'parroco'=>'required|string',
        'vicario'=>'required|string',
        'calle' => 'required|string',
        'ciudad' => 'required|string',
        'provincia' => 'required|string',
        'logo' => 'required|image|max:1024'
    ];

    public function crearParroquia(){
        $datos = $this->validate();

        // Almacenar imagen 
       $logo = $this->logo->store('public/img');
        $nombre_logo = str_replace('public/img/', '', $logo);

        ModelsParroquia::create([
            'diocesis'=>$datos['diocesis'],
            'obispo'=>$datos['obispo'],
            'parroquia'=>$datos['parroquia'],
            'telefonop'=>$datos['telefonop'],
            'parroco'=>$datos['parroco'],
            'vicario'=>$datos['vicario'],
            'calle'=>$datos['calle'],
            'ciudad'=>$datos['ciudad'],
            'provincia'=>$datos['provincia'],
            'logo'=> $nombre_logo,

        ]);
        //Mensaje 
        session()->flash('mensaje', 'Parroquia Configurada Correctamente');

        //Redireccionar 
        return redirect()->route('menu.index');

    }
    public function render()
    {
        return view('livewire.parroquia');
    }
}
