<?php

namespace App\Http\Livewire;

use App\Models\Correccionb;
use App\Models\Documentcb;
use App\Models\Parroquiaz;
use Livewire\Component;
use Livewire\WithPagination;

class EditarCorreccionb extends Component
{

    use WithPagination;

    public $correccionb_id;
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
    public $showEditModal = false;
    public Documentcb $editar;



   
    public function editDocument(Documentcb $documentcb){
        $this->editar = $documentcb;
        $this->showEditModal = true;
    }

    public function saveDocument(){
        $this->validate();
        $this->editar->save();
        $this->showEditModal = false;
    }

    protected $listeners = ['eliminarDocument'];

    public function eliminarDocument(Documentcb $documentcb){
        $documentcb -> delete();
    }

    protected $rules = [
        'editar.documento' => 'required',
        'editar.titular_documento' => 'required',
        'editar.referencias_documento' => 'required',
        'parroquia_id'=>'required|string',
        'fecha_solicitud'=>'required|string',
        'bautizado'=>'required|string',
        'libro_decreto'=>'required|string',
        'folio_decreto'=>'required|string',
        'no_decreto'=>'required|string',
        'libro_bautismo'=>'required|string',
        'folio_bautismo'=>'required|string',
        'acta_bautismo'=>'required|string',
        'notas'=>'required|string',
    ];

    public function mount(Correccionb $correccionb){
        
        $this->correccionb_id = $correccionb->id;
        $this->parroquia_id = $correccionb->parroquia_id;
        $this->fecha_solicitud = $correccionb->fecha_solicitud;
        $this->bautizado = $correccionb->bautizado;
        $this->libro_bautismo = $correccionb->libro_bautismo;
        $this->folio_bautismo = $correccionb->folio_bautismo;
        $this->acta_bautismo = $correccionb->acta_bautismo;
        $this->libro_decreto = $correccionb->libro_decreto;
        $this->folio_decreto = $correccionb->folio_decreto;
        $this->no_decreto = $correccionb->no_decreto;
        $this->notas = $correccionb->notas;
        
        
    }

    public function editarCorreccionb(){
        $datos = $this->validate();

        $correccionb = Correccionb::find($this->correccionb_id);

            $correccionb->libro_decreto = $datos['libro_decreto'];
            $correccionb->folio_decreto = $datos['folio_decreto'];
            $correccionb->no_decreto= $datos['no_decreto']; 
            $correccionb->parroquia_id =  $datos['parroquia_id'];
            $correccionb->fecha_solicitud =  $datos['fecha_solicitud'];
            $correccionb->bautizado = $datos['bautizado'];
            $correccionb->libro_bautismo = $datos['libro_bautismo'];
            $correccionb->folio_bautismo = $datos['folio_bautismo'];
            $correccionb->acta_bautismo = $datos['acta_bautismo']; 
            $correccionb->notas = $datos['notas'];

            $correccionb->save();

            session()->flash('mensaje', 'El Decreto se modificó correctamente');

            return redirect()->route('menu.correccionesb.show', ['correccionb'=>$correccionb]);

            
    }

    public function render()
    {
        $documentos = Documentcb::where('correccionb_id',$this->correccionb_id)->orderBy('id', 'asc')->paginate(5);
        $parroquias = Parroquiaz::all();
        return view('livewire.editar-correccionb',['parroquias'=>$parroquias, 'documentos'=>$documentos]);
    }
}
