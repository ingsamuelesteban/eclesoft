<?php

namespace App\Http\Livewire;

use App\Models\NoBautizado;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditarNoBautizado extends Component
{
    //Reglas Validaciones 

    public $nombre;
    public $genero;
    public $fecha_nacimiento;
    public $nombre_padre;
    public $cedula_padre;
    public $nombre_madre;
    public $cedula_madre;
    public $hospital;
    public $escuela;
    public $docmadre;
    public $docpadre;
    public $notas;
    public $hospital_nuevo;
    public $escuela_nuevo;
    public $docmadre_nuevo;
    public $docpadre_nuevo;
    public $noBautizado_id;
    public $filename;

    use WithFileUploads;

    protected $rules = [
        'nombre' => 'required|string',
        'genero'=> 'required|string' ,
        'fecha_nacimiento' => 'required',
        'nombre_padre' => 'required|string',
        'cedula_padre' => 'required|string',
        'nombre_madre' => 'required|string',
        'cedula_madre' => 'required|string',
        'hospital_nuevo' => 'nullable|file',
        'escuela_nuevo' => 'nullable|file',
        'docmadre_nuevo' => 'nullable|file',
        'docpadre_nuevo' => 'nullable|file',
        'notas' => 'nullable|string',
    ];

    public function mount(NoBautizado $noBautizado)
    {
        $this->noBautizado_id = $noBautizado ->id;
        $this->nombre = $noBautizado ->nombre;
        $this->genero = $noBautizado ->genero;
        $this->fecha_nacimiento = $noBautizado ->fecha_nacimiento;
        $this->nombre_padre = $noBautizado ->nombre_padre;
        $this->cedula_padre = $noBautizado ->cedula_padre;
        $this->nombre_madre = $noBautizado ->nombre_madre;
        $this->cedula_madre = $noBautizado ->cedula_madre;
        $this->hospital = $noBautizado ->hospital;
        $this->escuela = $noBautizado ->escuela;
        $this->docmadre = $noBautizado ->docmadre;
        $this->docpadre = $noBautizado ->docpadre; 
        $this->notas = $noBautizado ->notas;   
    }

    public function editarNoBautizado()
    {
        $datos = $this->validate();

        //Si hay documentos nuevos
        if($this->hospital_nuevo){
            $filename = $this->hospital_nuevo->getClientOriginalName();
            $hospital = $this->hospital_nuevo->storeAs('public/img', $filename);
            $datos['hospital'] = str_replace('public/img/', '' , $hospital);
        }
        if($this->escuela_nuevo){
            $filename = $this->escuela_nuevo->getClientOriginalName(); 
            $escuela = $this->escuela_nuevo->storeAs('public/img', $filename);
            $datos['escuela'] = str_replace('public/img/', '' , $escuela);
        }
        if($this->docmadre_nuevo){
            $filename = $this->docmadre_nuevo->getClientOriginalName();
            $docmadre = $this->docmadre_nuevo->storeAs('public/img', $filename);
            $datos['docmadre'] = str_replace('public/img/', '' , $docmadre);
        }
        if($this->docpadre_nuevo){
            $filename = $this->docpadre_nuevo->getClientOriginalName();
            $docpadre = $this->docpadre_nuevo->storeAs('public/img', $filename);
            $datos['docpadre'] = str_replace('public/img/', '' , $docpadre);
        }

        //Encontrar 

        $noBautizado = NoBautizado::find($this->noBautizado_id);

        //Asignar los valores

        $noBautizado->nombre = $datos['nombre'];
        $noBautizado->genero = $datos['genero'];
        $noBautizado->fecha_nacimiento = $datos['fecha_nacimiento'];
        $noBautizado->nombre_padre = $datos['nombre_padre'];
        $noBautizado->cedula_padre = $datos['cedula_padre'];
        $noBautizado->nombre_madre = $datos['nombre_madre'];
        $noBautizado->cedula_madre = $datos['cedula_madre'];
        $noBautizado->hospital = $datos['hospital'] ?? $noBautizado->hospital;
        $noBautizado->escuela = $datos['escuela'] ?? $noBautizado->escuela;
        $noBautizado->docpadre = $datos['docpadre'] ?? $noBautizado->docpadre;
        $noBautizado->docmadre = $datos['docmadre'] ?? $noBautizado->docmadre;
        $noBautizado->notas = $datos['notas'];
        $noBautizado->save();

        //Mensaje

        session()->flash('mensaje', 'Datos modificados');

        //Redireccionar

        return redirect()->route('menu.nobautizado.index');
    }
    public function render()
    {
        return view('livewire.editar-no-bautizado');
    }
    public function export($filename)
    {
     
         return response()->download($filename);
    }
    

}
