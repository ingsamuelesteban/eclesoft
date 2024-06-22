<?php

namespace App\Http\Livewire;

use App\Models\Bautismos;
use App\Models\Decretos;
use Livewire\Component;

class CrearDecreto extends Component
{
    public $bautismo_id;
    public $nombre;
    public $genero;
    public $fecha_nacimiento;
    public $lugar_nacimiento;
    public $folio_nacimiento;
    public $libro_nacimiento;
    public $acta_nacimiento;
    public $ano_nacimiento;
    public $circunscripcion_nacimiento;
    public $nombre_madre;
    public $cedula_madre;
    public $nombre_padre;
    public $cedula_padre;
    public $nombre_madrina;
    public $nombre_padrino;
    public $nombre_civil;
    public $genero_civil;
    public $fecha_nacimiento_civil;
    public $lugar_nacimiento_civil;
    public $folio_nacimiento_civil;
    public $libro_nacimiento_civil;
    public $acta_nacimiento_civil;
    public $ano_nacimiento_civil;
    public $circunscripcion_nacimiento_civil;
    public $nombre_madre_civil;
    public $cedula_madre_civil;
    public $nombre_padre_civil;
    public $cedula_padre_civil;
    public $nombre_madrina_civil;
    public $nombre_padrino_civil;


    protected $rules = [
        
        'bautismo_id' => '',
        'nombre' => '',
        'nombre_civil' => '',
        'genero' => '',
        'genero_civil' => '',
        'fecha_nacimiento' => '',
        'fecha_nacimiento_civil' => '',
        'lugar_nacimiento' => '',
        'lugar_nacimiento_civil' => '',
        'libro_nacimiento' => '',
        'libro_nacimiento_civil' => '',
        'folio_nacimiento' => '',
        'folio_nacimiento_civil' => '',
        'acta_nacimiento' => '',
        'acta_nacimiento_civil' => '',
        'ano_nacimiento' => '',
        'ano_nacimiento_civil' => '',
        'circunscripcion_nacimiento' => '',
        'circunscripcion_nacimiento_civil' => '',
        'nombre_madre' => '',
        'nombre_madre_civil' => '',
        'cedula_madre' => '',
        'cedula_madre_civil' => '',
        'nombre_padre' => '',
        'nombre_padre_civil' => '',
        'cedula_padre' => '',       
        'cedula_padre_civil' => '',
        'nombre_madrina' => '',
        'nombre_madrina_civil' => '',
        'nombre_padrino' => '',
        'nombre_padrino_civil' => '',
    ]; 

    public function mount(Bautismos $bautismo)
    {
        $this->bautismo_id = $bautismo->id;
        $this->nombre = $bautismo->nombre;
        $this->genero = $bautismo->genero;
        $this->fecha_nacimiento = $bautismo->fecha_nacimiento;
        $this->lugar_nacimiento = $bautismo->lugar_nacimiento;
        $this->libro_nacimiento = $bautismo->no_libro;
        $this->folio_nacimiento = $bautismo->folio;
        $this->acta_nacimiento = $bautismo->no_declaracion;
        $this->ano_nacimiento = $bautismo->año;
        $this->circunscripcion_nacimiento = $bautismo->circunscripcion;
        $this->nombre_madre = $bautismo->nombre_madre;
        $this->cedula_madre = $bautismo->cedula_madre;
        $this->nombre_padre = $bautismo->nombre_padre;
        $this->cedula_padre = $bautismo->cedula_padre;
        $this->nombre_madrina = $bautismo->nombre_madrina;
        $this->nombre_padrino = $bautismo->nombre_padrino;
    }
    public function guardarDecreto(){
        $datos = $this->validate();
       

        // Guardar 

        Decretos::create([
            'bautismo_id' =>$datos['bautismo_id'],
            'nombre'=> $datos['nombre'],
            'genero'=> $datos['genero'],
            'fecha_nacimiento'=> $datos['fecha_nacimiento'],
            'lugar_nacimiento'=> $datos['lugar_nacimiento'],
            'libro_nacimiento' => $datos['libro_nacimiento'],
            'libro_nacimiento_civil' => $datos['libro_nacimiento_civil'],
            'folio_nacimiento' => $datos['folio_nacimiento'],
            'folio_nacimiento_civil' => $datos['folio_nacimiento_civil'],
            'acta_nacimiento' => $datos['acta_nacimiento'],
            'acta_nacimiento_civil' => $datos['acta_nacimiento_civil'],
            'ano_nacimiento' => $datos['ano_nacimiento'],
            'ano_nacimiento_civil' =>$datos['ano_nacimiento_civil'],
            'circunscripcion_nacimiento' => $datos['circunscripcion_nacimiento'],
            'circunscripcion_nacimiento_civil' =>$datos ['circunscripcion_nacimiento_civil'],
            'nombre_madre'=> $datos['nombre_madre'],
            'cedula_madre'=> $datos['cedula_madre'],
            'nombre_padre'=> $datos['nombre_padre'],
            'cedula_padre'=> $datos['cedula_padre'],
            'nombre_madrina'=> $datos['nombre_madrina'],
            'nombre_padrino'=> $datos['nombre_padrino'],
            'nombre_civil'=> $datos['nombre_civil'],
            'genero_civil'=> $datos['genero_civil'],
            'fecha_nacimiento_civil'=> $datos['fecha_nacimiento_civil'],
            'lugar_nacimiento_civil'=> $datos['lugar_nacimiento_civil'],
            'nombre_madre_civil'=> $datos['nombre_madre_civil'],
            'cedula_madre_civil'=> $datos['cedula_madre_civil'],
            'nombre_padre_civil'=> $datos['nombre_padre_civil'],
            'cedula_padre_civil'=> $datos['cedula_padre_civil'],
            'nombre_madrina_civil'=> $datos['nombre_madrina_civil'],
            'nombre_padrino_civil'=> $datos['nombre_padrino_civil'],
        ]);

        session()->flash('mensaje', 'El Decreto se guardó Correctamente');
        return redirect()->route('menu.decretos.index');
    }

    public function render()
    {
        
        return view('livewire.crear-decreto');
    }
}
