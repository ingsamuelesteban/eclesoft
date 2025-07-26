<?php

namespace App\Http\Livewire;

use App\Models\Parroquia as ModelsParroquia;
use App\Models\Firmante as ModelsFirmante;
use Livewire\Component;
use Livewire\WithFileUploads;

class Parroquia extends Component
{
    public $diocesis;
    public $obispo;
    public $parroquia;
    public $telefonop;
    public $rnc;
    public $parroco;
    public $vicario;
    public $calle;
    public $ciudad;
    public $provincia;
    public $correo;
    public $logo;
    public $logo_obispado;
    public $circunscripcion;
    public $color_borde;
    public $firmante_id;
    public $nombre_firmante;
    public $titulo_firmante;
    public $facturacion_activa = false;
    public $precio_acta;

    use WithFileUploads;

    protected $rules = [
        'diocesis'=>'required|string',
        'obispo'=>'required|string',
        'parroquia'=>'required|string',
        'telefonop'=>'required|string',
        'rnc'=>'required|string',
        'parroco'=>'required|string',
        'vicario'=>'required|string',
        'calle' => 'required|string',
        'ciudad' => 'required|string',
        'provincia' => 'required|string',
        'circunscripcion' => 'required|string',
        'correo'=>'required|string',
        'logo' => 'required|image|max:1024',
        'logo_obispado' => 'required|image|max:1024',
        'color_borde' => '',
        'facturacion_activa' => 'boolean',
        'precio_acta' => 'required|numeric|min:0',
    ];

    public function crearParroquia(){
        $datos = $this->validate();

        // Almacenar imagen 
        $logo = $this->logo->store('public/img');
        $nombre_logo = str_replace('public/img/', '', $logo);
        $logo_obispado = $this->logo_obispado->store('public/img');
        $nombre_logo_obispado = str_replace('public/img/', '', $logo_obispado);

        ModelsFirmante::create([
            'nombre'=>$datos['parroco'],
            'titulo'=>'Párroco',

        ]);

        
        ModelsParroquia::create([
            'diocesis'=>$datos['diocesis'],
            'obispo'=>$datos['obispo'],
            'parroquia'=>$datos['parroquia'],
            'telefonop'=>$datos['telefonop'],
            'rnc'=>$datos['rnc'],
            'parroco'=>$datos['parroco'],
            'vicario'=>$datos['vicario'],
            'calle'=>$datos['calle'],
            'ciudad'=>$datos['ciudad'],
            'provincia'=>$datos['provincia'],
            'circunscripcion'=>$datos['circunscripcion'],
            'correo'=>$datos['correo'],
            'logo'=> $nombre_logo,
            'logo_obispado'=> $nombre_logo_obispado,
            'color_borde' => $datos['color_borde'],
            'firmante_id'=>'1',
            'facturacion_activa' => $datos['facturacion_activa'],
            'precio_acta' => $datos['precio_acta'],

        ]);
        //Mensaje 
        session()->flash('mensaje', 'Parroquia Configurada Correctamente');

        //Redireccionar 
        return redirect()->route('menu.index');

    }
    public function render()
    {
        return view('livewire.parroquia');
    }
}
