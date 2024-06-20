<?php

namespace App\Http\Livewire;

use App\Models\Correccionb;
use App\Models\Documentcb;
use App\Models\Parroquiaz;
use Livewire\Component;

class CorreccionBautismo extends Component
{
    public $i = 0;
    public $inputs = [];
    public $updateMode = false;
    public $libro_decreto;
    public $folio_decreto;
    public $no_decreto;
    public $parroquia_id;
    public $fecha_solicitud;
    public $bautizado;
    public $libro_bautismo;
    public $folio_bautismo;
    public $acta_bautismo;
    public $documento;
    public $titular_documento;
    public $referencias_documento;
    public $notas;


    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs ,$i);
    }

   
    
    public function remove($i)
    {
        unset($this->inputs[$i]);
    }

    

    public function render()
    {
        $parroquias = Parroquiaz::all();
        return view('livewire.correccion-bautismo', ['parroquias'=>$parroquias,]);
    }

    private function resetInputFields(){
        $this->documento = '';
        $this->titular_documento = '';
        $this->referencias_documento = '';
    }

    protected $rules = [
        'parroquia_id'=>'required|string',
        'fecha_solicitud'=>'required|string',
        'bautizado'=>'required|string',
        'libro_decreto'=>'required|string',
        'folio_decreto'=>'required|string',
        'no_decreto'=>'required|string',
        'libro_bautismo'=>'required|string',
        'folio_bautismo'=>'required|string',
        'acta_bautismo'=>'required|string',
        'documento.0'=>'',
        'titular_documento.0'=>'',
        'referencias_documento.0'=>'',
        'documento.*'=>'required',
        'titular_documento.*'=>'required',
        'referencias_documento.*'=>'required',
        'notas'=>'required|string',
    ];

    public function guardar()
    {
        $datos = $this->validate();

        $coreecionb = Correccionb::create([
            'libro_decreto'=>$datos['libro_decreto'],
            'folio_decreto'=>$datos['folio_decreto'],
            'no_decreto'=>$datos['no_decreto'], 
            'parroquia_id' => $datos['parroquia_id'],
            'fecha_solicitud' => $datos['fecha_solicitud'],
            'bautizado'=>$datos['bautizado'],
            'libro_bautismo'=>$datos['libro_bautismo'],
            'folio_bautismo'=>$datos['folio_bautismo'],
            'acta_bautismo'=>$datos['acta_bautismo'], 
            'notas'=>$datos['notas'],

        ]);  

        foreach($this->documento as $key => $value){


        Documentcb::create([
            'correccionb_id'=>$coreecionb->id,
            'documento'=>$this->documento[$key],
            'titular_documento'=>$this->titular_documento[$key],
            'referencias_documento'=>$this->referencias_documento[$key],
        ]);
    }
        return redirect()->route('menu.correccionesb.show',[$coreecionb->id]);
    }
}
