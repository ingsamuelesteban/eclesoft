<?php

namespace App\Http\Livewire;

use App\Models\Diocesi;
use Livewire\Component;

class ShowCorreccionb extends Component
{

    public $firma;
    public $confirmacion_id;
    public $diocesi_id;

    protected $rules = [
        'firma' => 'required|string'
    ];

    public function mount(Diocesi $diocesi){
        $this->firma = $diocesi->firma;
        $this->diocesi_id = $diocesi->id;
    }

    public function cambiarFirma(){
       
        

        $datos = $this->validate();

        $diocesi = Diocesi::find($this->diocesi_id);

        $diocesi->firma = $datos['firma'];


        $diocesi->save();

        session()->flash('mensaje','Firma Actualizada');

        //actualizar pagina 
        return redirect(request()->header('Referer'));
    }



    public function render()
    {
        $diocesi = Diocesi::where('id',1)->get();
    
        return view('livewire.show-correccionb',['diocesi'=>$diocesi]);
    }
}
