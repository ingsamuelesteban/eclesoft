<?php

namespace App\Http\Livewire;

use App\Models\Bautismos;
use App\Models\Comunidades;
use App\Models\User;
use App\Models\Users;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class CrearActa extends Component
{
    //Reglas o validaciones 

    public $libro_bautismo;
    public $folio_bautismo;
    public $no_bautismo;
    public $nombre;
    public $genero;
    public $fecha_nacimiento;
    public $lugar_nacimiento;
    public $nombre_madre;
    public $cedula_madre;
    public $nombre_padre;
    public $cedula_padre;
    public $nombre_madrina;
    public $nombre_padrino;
    public $no_libro;
    public $folio;
    public $no_declaracion;
    public $año;
    public $circunscripcion;
    public $oficialia;
    public $parroquia;
    public $ub_parroquia;
    public $celebrante_name;
    public $fecha_celebracion;
    public $notas;
    public $comunidades;

    protected $rules = [
        
        'nombre' => 'required|string',
        'genero' => 'required',
        'fecha_nacimiento' => 'required',
        'lugar_nacimiento' => 'required|string',
        'nombre_madre' => 'required|string',
        'cedula_madre' => 'required',
        'nombre_padre' => 'required|string',
        'cedula_padre' => 'required',
        'nombre_madrina' => 'required|string',
        'nombre_padrino' => 'required|string',
        'no_libro' => 'required',
        'folio' => 'required',
        'no_declaracion' => 'required|string',
        'año' => 'required|string',
        'circunscripcion' => 'required|string',
        'oficialia' => 'required|string',
        'parroquia' => 'required',
        'ub_parroquia' => 'required|string',
        'celebrante_name' => 'required|string',
        'fecha_celebracion' => 'required',
        'notas' => 'nullable|string',
        'libro_bautismo'=>'required|string',
        'folio_bautismo'=>'required|string',
        'no_bautismo'=>'required|string',

    ]; 

    public function crearActa(){
        $datos = $this->validate();

        // Guardar 

        Bautismos::create([
            'libro_bautismo'=>$datos['libro_bautismo'],
            'folio_bautismo'=>$datos['folio_bautismo'],
            'no_bautismo'=>$datos['no_bautismo'],
            'nombre'=> $datos['nombre'],
            'genero'=> $datos['genero'],
            'fecha_nacimiento'=> $datos['fecha_nacimiento'],
            'lugar_nacimiento'=> $datos['lugar_nacimiento'],
            'nombre_madre'=> $datos['nombre_madre'],
            'cedula_madre'=> $datos['cedula_madre'],
            'nombre_padre'=> $datos['nombre_padre'],
            'cedula_padre'=> $datos['cedula_padre'],
            'nombre_madrina'=> $datos['nombre_madrina'],
            'nombre_padrino'=> $datos['nombre_padrino'],
            'no_libro'=> $datos['no_libro'],
            'folio'=> $datos['folio'],
            'no_declaracion'=> $datos['no_declaracion'],
            'año'=> $datos['año'],
            'circunscripcion'=> $datos['circunscripcion'],
            'oficialia'=> $datos['oficialia'],
            'parroquia'=> $datos['parroquia'],
            'ub_parroquia'=> $datos['ub_parroquia'],
            'celebrante'=> $datos['celebrante_name'],
            'fecha_celebracion'=> $datos['fecha_celebracion'],
            'notas' => $datos['notas'],
        ]);

        //Crear un mensaje antes de redireccionar 

        session()->flash('mensaje', 'El acta se guardó correctamente');

        //Redireccionar

        return redirect()->route('menu.bautismos.create');
    }

    public function render()
    {
        //Consultar BD para autopoblar select

        $comunidades = DB::table('comunidades')->get(['nombre_comunidad', 'ubicacion']);
    
       
        

        return view('livewire.crear-acta', [
           $this->comunidades = $comunidades
        ]);
        

    }

}
