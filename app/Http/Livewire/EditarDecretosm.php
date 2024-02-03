<?php

namespace App\Http\Livewire;

use App\Models\Decretosm;
use Livewire\Component;

class EditarDecretosm extends Component
{

    public $matrimonio_id;
    public $decretom_id;
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
        
        'decretom_id' => '',
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

    public function mount(Decretosm $decretom)
    {
        $this->matrimonio_id = $decretom->matrimonio_id;
        $this->decretom_id = $decretom->id;
        //ESPOSA LIBRO
        $this->nombre_esposa = $decretom->nombre_esposa;
        $this->cedula_esposa = $decretom->cedula_esposa;
        $this->lugar_nacimiento_esposa = $decretom->lugar_nacimiento_esposa;
        $this->fecha_nacimiento_esposa = $decretom->fecha_nacimiento_esposa;
        //ESPOSA CIVIL
        $this->nombre_esposa_civil = $decretom->nombre_esposa_civil;
        $this->cedula_esposa_civil = $decretom->cedula_esposa_civil;
        $this->lugar_nacimiento_esposa_civil = $decretom->lugar_nacimiento_esposa_civil;
        $this->fecha_nacimiento_esposa_civil = $decretom->fecha_nacimiento_esposa_civil;
        //ESPOSO LIBRO
        $this->nombre_esposo = $decretom->nombre_esposo;
        $this->cedula_esposo = $decretom->cedula_esposo;
        $this->lugar_nacimiento_esposo = $decretom->lugar_nacimiento_esposo;
        $this->fecha_nacimiento_esposo = $decretom->fecha_nacimiento_esposo;
        //ESPOSO CIVIL
        $this->nombre_esposo_civil = $decretom->nombre_esposo_civil;
        $this->cedula_esposo_civil = $decretom->cedula_esposo_civil;
        $this->lugar_nacimiento_esposo_civil = $decretom->lugar_nacimiento_esposo_civil;
        $this->fecha_nacimiento_esposo_civil = $decretom->fecha_nacimiento_esposo_civil;
        //PADRES DE LA ESPOSA
        $this->nombre_madre_esposa = $decretom->nombre_madre_esposa;
        $this->nombre_padre_esposa = $decretom->nombre_padre_esposa;
        $this->nombre_madre_esposa_civil = $decretom->nombre_madre_esposa_civil;
        $this->nombre_padre_esposa_civil = $decretom->nombre_padre_esposa_civil;
        //PADRES DEL ESPOSO
        $this->nombre_madre_esposo = $decretom->nombre_madre_esposo;
        $this->nombre_padre_esposo = $decretom->nombre_padre_esposo;
        $this->nombre_madre_esposo_civil = $decretom->nombre_madre_esposo_civil;
        $this->nombre_padre_esposo_civil = $decretom->nombre_padre_esposo_civil;
        //MADRINA
        $this->nombre_madrina = $decretom->nombre_madrina;
        $this->cedula_madrina = $decretom->cedula_madrina;
        $this->nombre_madrina_civil = $decretom->nombre_madrina_civil;
        $this->cedula_madrina_civil = $decretom->cedula_madrina_civil;
        //PADRINO
        $this->nombre_padrino = $decretom->nombre_padrino;
        $this->cedula_padrino = $decretom->cedula_padrino;
        $this->nombre_padrino_civil = $decretom->nombre_padrino_civil;
        $this->cedula_padrino_civil = $decretom->cedula_padrino_civil;
    }

    public function editarDecretom(){
        $datos = $this->validate();

        $decretom = Decretosm::find($this->decretom_id);

        //ESPOSA LIBRO
        $decretom->nombre_esposa = $datos['nombre_esposa'];
        $decretom->cedula_esposa = $datos['cedula_esposa'];
        $decretom->lugar_nacimiento_esposa = $datos['lugar_nacimiento_esposa'];
        $decretom->fecha_nacimiento_esposa = $datos['fecha_nacimiento_esposa'];
        //ESPOSA CIVIL
        $decretom->nombre_esposa_civil = $datos['nombre_esposa_civil'];
        $decretom->cedula_esposa_civil = $datos['cedula_esposa_civil'];
        $decretom->lugar_nacimiento_esposa_civil = $datos['lugar_nacimiento_esposa_civil'];
        $decretom->fecha_nacimiento_esposa_civil = $datos['fecha_nacimiento_esposa_civil'];
        //ESPOSO LIBRO
        $decretom->nombre_esposo = $datos['nombre_esposo'];
        $decretom->cedula_esposo = $datos['cedula_esposo'];
        $decretom->lugar_nacimiento_esposo = $datos['lugar_nacimiento_esposo'];
        $decretom->fecha_nacimiento_esposo = $datos['fecha_nacimiento_esposo'];
        //ESPOSO CIVIL
        $decretom->nombre_esposo_civil = $datos['nombre_esposo_civil'];
        $decretom->cedula_esposo_civil = $datos['cedula_esposo_civil'];
        $decretom->lugar_nacimiento_esposo_civil = $datos['lugar_nacimiento_esposo_civil'];
        $decretom->fecha_nacimiento_esposo_civil = $datos['fecha_nacimiento_esposo_civil'];
        //PADRES DE LA ESPOSA
        $decretom->nombre_madre_esposa = $datos['nombre_madre_esposa'];
        $decretom->nombre_padre_esposa = $datos['nombre_padre_esposa'];
        $decretom->nombre_madre_esposa_civil = $datos['nombre_madre_esposa_civil'];
        $decretom->nombre_padre_esposa_civil = $datos['nombre_padre_esposa_civil'];
        //PADRES DEL ESPOSO
        $decretom->nombre_madre_esposo = $datos['nombre_madre_esposo'];
        $decretom->nombre_padre_esposo = $datos['nombre_padre_esposo'];
        $decretom->nombre_madre_esposo_civil = $datos['nombre_madre_esposo_civil'];
        $decretom->nombre_padre_esposo_civil = $datos['nombre_padre_esposo_civil'];
        //MADRINA
        $decretom->nombre_madrina = $datos['nombre_madrina'];
        $decretom->cedula_madrina = $datos['cedula_madrina'];
        $decretom->nombre_madrina_civil = $datos['nombre_madrina_civil'];
        $decretom->cedula_madrina_civil = $datos['cedula_madrina_civil'];
        //PADRINO
        $decretom->nombre_padrino = $datos['nombre_padrino'];
        $decretom->cedula_padrino = $datos['cedula_padrino'];
        $decretom->nombre_padrino_civil = $datos['nombre_padrino_civil'];
        $decretom->cedula_padrino_civil = $datos['cedula_padrino_civil'];

        $decretom->save();

        session()->flash('mensaje', 'El Decreto se Modificó correctamente');

        return redirect()->route('menu.decretosm.show', [$decretom->id]);
    }

    public function render()
    {
        return view('livewire.editar-decretosm');
    }
}
