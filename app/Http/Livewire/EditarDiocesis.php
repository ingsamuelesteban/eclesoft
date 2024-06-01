<?php

namespace App\Http\Livewire;

use App\Models\Diocesi;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditarDiocesis extends Component
{

    public $diocesi_id;
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
    public $logo_nuevo;

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
        'logo_nuevo'=>'nullable|image',
    ];

    public function mount(Diocesi $diocesi){

        $this->diocesi_id = $diocesi->id;
        $this->nombre = $diocesi->nombre;
        $this->obispo = $diocesi->obispo;
        $this->titulo = $diocesi->titulo;
        $this->canciller = $diocesi->canciller;
        $this->vicario_general = $diocesi->vicario_general;
        $this->firma = $diocesi->firma;
        $this->calle = $diocesi->calle;
        $this->ciudad = $diocesi->ciudad;
        $this->provincia = $diocesi->provincia;
        $this->telefono = $diocesi->telefono;
        $this->rnc = $diocesi->rnc;
        $this->correo = $diocesi->correo;
        $this->logo = $diocesi->logo;

    }

    public function editarDiocesis(){
        $datos = $this->validate();

         //Si hay un logo nuevo
         if($this->logo_nuevo) {
            $logo = $this->logo_nuevo->store('public/img');
            $datos['logo'] = str_replace('public/img/', '', $logo);
        }

        $diocesi = Diocesi::find($this->diocesi_id);

        $diocesi->nombre = $datos['nombre'];
        $diocesi->obispo = $datos['obispo'];
        $diocesi->titulo = $datos['titulo'];
        $diocesi->canciller = $datos['canciller'];
        $diocesi->vicario_general = $datos['vicario_general'];
        $diocesi->firma = $datos['firma'];
        $diocesi->calle = $datos['calle'];
        $diocesi->ciudad = $datos['ciudad'];
        $diocesi->provincia = $datos['provincia'];
        $diocesi->telefono = $datos['telefono'];
        $diocesi->rnc = $datos['rnc'];
        $diocesi->logo = $datos['logo'] ?? $diocesi->logo;

        $diocesi->save();

        session()->flash('mensaje', 'Datos Modificados Correctamente');

        return redirect()->route('menu.diocesis.index');
    }
    public function render()
    {
        return view('livewire.editar-diocesis');
    }
}
