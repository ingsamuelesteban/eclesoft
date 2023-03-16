<?php

namespace App\Http\Livewire;

use App\Models\Parroquia;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditarParroquia extends Component
{
    public $diocesis;
    public $obispo;
    public $parroquia;
    public $telefonop;
    public $rnc;
    public $parroco;
    public $vicario;
    public $calle;
    public $ciudad;
    public $provincia;
    public $correo;
    public $parroquia_id;
    public $logo;
    public $logo_nuevo;

    use WithFileUploads;

    protected $rules = [

        'diocesis' => 'required|string',
        'obispo' => 'required|string',
        'parroquia' => 'required|string',
        'telefonop' => 'required|string',
        'rnc' => 'required|string',
        'parroco' => 'required|string',
        'vicario' => 'string',
        'calle' => 'required|string',
        'ciudad' => 'required|string',
        'provincia' => 'required|string',
        'correo' => 'required|string',
        'logo_nuevo' => 'nullable|image|max:1024',
    ];

    public function mount(Parroquia $parroquia)
    {
        $this->parroquia_id = $parroquia->id;
        $this->diocesis = $parroquia->diocesis;
        $this->obispo = $parroquia->obispo;
        $this->parroquia = $parroquia->parroquia;
        $this->telefonop = $parroquia->telefonop;
        $this->rnc = $parroquia->rnc;
        $this->parroco = $parroquia->parroco;
        $this->vicario = $parroquia->vicario;
        $this->calle = $parroquia->calle;
        $this->ciudad = $parroquia->ciudad;
        $this->provincia = $parroquia->provincia;
        $this->correo = $parroquia->correo;
        $this->logo = $parroquia->logo;
    }

    public function editarParroquia()
    {
        $datos = $this->validate();

        //Si hay un logo nuevo
        if($this->logo_nuevo) {
            $logo = $this->logo_nuevo->store('public/img');
            $datos['logo'] = str_replace('public/img/', '', $logo);
        }

        //Encontrar La parroquia.

        $parroquia = Parroquia::find($this->parroquia_id);


        //Asignar los valores
        $parroquia->diocesis = $datos['diocesis'];
        $parroquia->obispo = $datos['obispo'];
        $parroquia->parroquia=$datos['parroquia'];
        $parroquia->telefonop=$datos['telefonop'];
        $parroquia->rnc=$datos['rnc'];
        $parroquia->parroco=$datos['parroco'];
        $parroquia->vicario=$datos['vicario'];
        $parroquia->calle=$datos['calle'];
        $parroquia->ciudad=$datos['ciudad'];
        $parroquia->provincia=$datos['provincia'];
        $parroquia->correo=$datos['correo'];
        $parroquia->logo = $datos['logo'] ?? $parroquia->logo;

        //Guardar
        $parroquia->save();

        //Mensaje 
        session()->flash('mensaje', 'Datos modificados');

        //Redireccionar
        return redirect()->route('menu.administracion.index');

    }
    public function render()
    {
        return view('livewire.editar-parroquia');
    }
}
