<?php

namespace App\Http\Livewire;

use App\Models\Matrimonios;
use App\Models\Decretos;
use App\Models\Decretosm;
use Livewire\Component;

class CrearDecretom extends Component
{
    public $matrimonio_id;
    public $nombre_esposa;
    public $nombre_esposa_civil;
    public $nombre_esposo;
    public $nombre_esposo_civil;
    public $fecha_nacimiento_esposa;
    public $fecha_nacimiento_esposa_civil;
    public $fecha_nacimiento_esposo;
    public $fecha_nacimiento_esposo_civil;
    public $lugar_nacimiento_esposa;
    public $lugar_nacimiento_esposa_civil;
    public $lugar_nacimiento_esposo;
    public $lugar_nacimiento_esposo_civil;
    public $cedula_esposa;
    public $cedula_esposa_civil;
    public $cedula_esposo;
    public $cedula_esposo_civil;
    public $nombre_madre_esposa;
    public $nombre_madre_esposa_civil;
    public $nombre_madre_esposo;
    public $nombre_madre_esposo_civil;
    public $nombre_padre_esposa;
    public $nombre_padre_esposa_civil;
    public $nombre_padre_esposo;
    public $nombre_padre_esposo_civil;
    public $nombre_madrina;
    public $nombre_madrina_civil;
    public $nombre_padrino;
    public $nombre_padrino_civil;
    public $cedula_madrina;
    public $cedula_madrina_civil;
    public $cedula_padrino;
    public $cedula_padrino_civil;


    protected $rules = [
        
        'matrimonio_id' => '',
        'nombre_esposa' => '',
        'nombre_esposa_civil' => '',
        'nombre_esposo' => '',
        'nombre_esposo_civil' => '',
        'fecha_nacimiento_esposa' => '',
        'fecha_nacimiento_esposa_civil' => '',
        'fecha_nacimiento_esposo' => '',
        'fecha_nacimiento_esposo_civil' => '',
        'lugar_nacimiento_esposa' => '',
        'lugar_nacimiento_esposa_civil' => '',
        'lugar_nacimiento_esposo' => '',
        'lugar_nacimiento_esposo_civil' => '',
        'cedula_esposa' => '',
        'cedula_esposa_civil' => '',
        'cedula_esposo' => '',
        'cedula_esposo_civil' => '',
        'nombre_madre_esposa' => '',
        'nombre_madre_esposa_civil' => '',
        'nombre_madre_esposo' => '',
        'nombre_madre_esposo_civil' => '',
        'nombre_padre_esposa' => '',
        'nombre_padre_esposa_civil' => '',
        'nombre_padre_esposo' => '',
        'nombre_padre_esposo_civil' => '',
        'nombre_madrina' => '',
        'nombre_madrina_civil' => '',
        'nombre_padrino' => '',
        'nombre_padrino_civil' => '',
        'cedula_madrina' => '',
        'cedula_madrina_civil' => '',
        'cedula_padrino' => '',
        'cedula_padrino_civil' => '',
    ]; 

    public function mount(Matrimonios $matrimonio)
    {
        $this->matrimonio_id = $matrimonio->id;
        $this->nombre_esposa = $matrimonio->nombre_esposa;
        $this->nombre_esposo = $matrimonio->nombre_esposo;
        $this->cedula_esposa = $matrimonio->documento_esposa;
        $this->cedula_esposo = $matrimonio->documento_esposo;
        $this->nombre_madrina = $matrimonio->nombre_madrina;
        $this->nombre_padrino = $matrimonio->nombre_padrino;
        $this->cedula_madrina = $matrimonio->documento_madrina;
        $this->cedula_padrino = $matrimonio->documento_padrino;
    }
    public function guardarDecretom(){
        $datos = $this->validate();
       

        // Guardar 

        Decretosm::create([
            'matrimonio_id' =>$datos['matrimonio_id'],
            'nombre_esposa'=> $datos['nombre_esposa'],
            'nombre_esposa_civil'=> $datos['nombre_esposa_civil'],
            'cedula_esposa' => $datos['cedula_esposa'],
            'cedula_esposa_civil' => $datos['cedula_esposa_civil'],
            'nombre_esposo'=> $datos['nombre_esposo'],
            'nombre_esposo_civil'=> $datos['nombre_esposo_civil'],
            'cedula_esposo' => $datos['cedula_esposo'],
            'cedula_esposo_civil' => $datos['cedula_esposo_civil'],
            'fecha_nacimiento_esposa'=> $datos['fecha_nacimiento_esposa'],
            'fecha_nacimiento_esposa_civil'=> $datos['fecha_nacimiento_esposa_civil'],
            'fecha_nacimiento_esposo'=> $datos['fecha_nacimiento_esposo'],
            'fecha_nacimiento_esposo_civil'=> $datos['fecha_nacimiento_esposo_civil'],
            'lugar_nacimiento_esposa'=> $datos['lugar_nacimiento_esposa'],
            'lugar_nacimiento_esposa_civil'=> $datos['lugar_nacimiento_esposa_civil'],
            'lugar_nacimiento_esposo'=> $datos['lugar_nacimiento_esposo'],
            'lugar_nacimiento_esposo_civil'=> $datos['lugar_nacimiento_esposo_civil'],
            'nombre_madre_esposa'=> $datos['nombre_madre_esposa'],
            'nombre_madre_esposa_civil'=> $datos['nombre_madre_esposa_civil'],
            'nombre_madre_esposo'=> $datos['nombre_madre_esposo'],
            'nombre_madre_esposo_civil'=> $datos['nombre_madre_esposo_civil'],
            'nombre_padre_esposa'=> $datos['nombre_padre_esposa'],
            'nombre_padre_esposa_civil'=> $datos['nombre_padre_esposa_civil'],
            'nombre_padre_esposo'=> $datos['nombre_padre_esposo'],
            'nombre_padre_esposo_civil'=> $datos['nombre_padre_esposo_civil'],
            'nombre_madrina'=> $datos['nombre_madrina'],
            'nombre_madrina_civil'=> $datos['nombre_madrina_civil'],
            'cedula_madrina' =>$datos['cedula_madrina'],
            'cedula_madrina_civil' =>$datos['cedula_madrina_civil'],
            'nombre_padrino'=> $datos['nombre_padrino'],
            'nombre_padrino_civil'=> $datos['nombre_padrino_civil'],
            'cedula_padrino' =>$datos['cedula_padrino'],
            'cedula_padrino_civil' =>$datos['cedula_padrino_civil'],
        ]);

        session()->flash('mensaje', 'El Decreto se guardó Correctamente');
        return redirect()->route('menu.decretosm.index');
    }

    public function render()
    {
        
        return view('livewire.crear-decretom');
    }
}
