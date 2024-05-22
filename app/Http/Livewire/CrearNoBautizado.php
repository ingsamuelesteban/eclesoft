<?php

namespace App\Http\Livewire;

use App\Models\NoBautizado;
use Livewire\Component;
use Livewire\WithFileUploads;
use Barryvdh\DomPDF\Facade\Pdf;

class CrearNoBautizado extends Component
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
        public $nombre_hospital;
        public $nombre_escuela;
        public $nombre_docmadre;
        public $nombre_docpadre;

        use WithFileUploads;

        protected $rules = [
            'nombre' => 'required|string',
            'genero'=> 'required|string' ,
            'fecha_nacimiento' => 'required',
            'nombre_padre' => 'required|string',
            'cedula_padre' => 'required|string',
            'nombre_madre' => 'required|string',
            'cedula_madre' => 'required|string',
            'hospital' => 'nullable|file',
            'escuela' => 'nullable|file',
            'docmadre' => 'nullable|file',
            'docpadre' => 'nullable|file',
            'notas' => 'nullable|string',
        ];

        public function guardarNoBautizado(){
            $datos = $this->validate();

            //Alamcenar documentos

            if($this->hospital){
                $filename = $this->hospital->getClientOriginalName();
                $hospital = $this->hospital->storeAs('public/img', $filename);
                $datos['hospital'] = str_replace('public/img/', '', $hospital);
                }
                if($this->escuela){
                $filename = $this->escuela->getClientOriginalName();
                $escuela = $this->escuela->storeAs('public/img', $filename);
                $datos['escuela'] = str_replace('public/img/', '', $escuela);
                }
                if($this->docpadre){
                $filename = $this->docpadre->getClientOriginalName();
                $docpadre = $this->docpadre->storeAs('public/img', $filename);
                $datos['docpadre'] = str_replace('public/img/', '', $docpadre);
                }
                if($this->docmadre){
                $filename = $this->docmadre->getClientOriginalName();
                $docmadre = $this->docmadre->storeAs('public/img', $filename);
                $datos['docmadre'] = str_replace('public/img/', '', $docmadre);
                }
            NoBautizado::create([
                'nombre'=>$datos['nombre'],
                'genero'=>$datos['genero'],
                'fecha_nacimiento'=>$datos['fecha_nacimiento'],
                'nombre_padre'=>$datos['nombre_padre'],
                'cedula_padre'=>$datos['cedula_padre'],
                'nombre_madre'=>$datos['nombre_madre'],
                'cedula_madre'=>$datos['cedula_madre'],
                'hospital'=>$datos['hospital'],
                'escuela'=>$datos['escuela'],
                'docmadre'=>$datos['docmadre'],
                'docpadre'=>$datos['docpadre']

            ]);


            //Mensaje

            session()->flash('mensaje', 'Datos Guardados');

            //Redireccionar 
            return redirect()->route('menu.nobautizado.index');
    
        }


    public function render()
    {
        return view('livewire.crear-no-bautizado');
    }
}
