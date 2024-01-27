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
    public $parroco;
    public $vicario;
    public $calle;
    public $ciudad;
    public $provincia;
    public $parroquia_id;
    public $logo;
    public $logo_nuevo;
    public $color_borde;

    use WithFileUploads;

    protected $rules = [

        'diocesis' => 'required|string',
        'obispo' => 'required|string',
        'parroquia' => 'required|string',
        'telefonop' => 'required|string',
        'parroco' => 'required|string',
        'vicario' => 'string',
        'calle' => 'required|string',
        'ciudad' => 'required|string',
        'provincia' => 'required|string',
        'logo_nuevo' => 'nullable|image|max:1024',
        'color_borde' => '',

     
        
      
    ];

    public function mount(Parroquia $parroquia)
    {
        $this->parroquia_id = $parroquia->id;
        $this->diocesis = $parroquia->diocesis;
        $this->obispo = $parroquia->obispo;
        $this->parroquia = $parroquia->parroquia;
        $this->telefonop = $parroquia->telefonop;
        $this->parroco = $parroquia->parroco;
        $this->vicario = $parroquia->vicario;
        $this->calle = $parroquia->calle;
        $this->ciudad = $parroquia->ciudad;
        $this->provincia = $parroquia->provincia;
        $this->logo = $parroquia->logo;
        $this->color_borde = $parroquia->color_borde;
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
        $parroquia->parroco=$datos['parroco'];
        $parroquia->vicario=$datos['vicario'];
        $parroquia->calle=$datos['calle'];
        $parroquia->ciudad=$datos['ciudad'];
        $parroquia->provincia=$datos['provincia'];
        $parroquia->logo = $datos['logo'] ?? $parroquia->logo;
        $parroquia->color_borde= $datos['color_borde'];

        //Guardar

       $parroquia->save();

        //Mensaje 
        session()->flash('message', 'Datos modificados');

        //Redireccionar
        return redirect()->route('menu.administracion.index');

    }
    public function render()
    {
        return view('livewire.editar-parroquia');
    }
}
