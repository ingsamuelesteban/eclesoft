<?php

namespace App\Http\Livewire;

use App\Models\Comunidades;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class CrearComunidad extends Component
{

        public $nombre_comunidad;
        public $ubicacion;
        public $coordinador;
        public $telefonoc;
        public $pfamiliar;
        public $tfamiliar;
        public $pjuvenil;
        public $tjuvenil;
        public $padolescentes;
        public $tadolescentes;
        public $pvocacional;
        public $tvocacional;
        public $psocial;
        public $tsocial;
        public $psalud;
        public $tsalud;
        public $pmisiones;
        public $tmisiones;
        public $pcatequesis;
        public $tcatequesis;
        public $pliturgica;
        public $tliturgica;
        public $ppenitenciaria;
        public $tpenitenciaria;
        public $pmovilidad;
        public $tmovilidad;
        public $peducativa;
        public $teducativa;
        public $puniversitaria;
        public $tuniversitaria;
        public $pcomunion;
        public $tcomunion;
        public $pecumenismo;
        public $tecumenismo;
        public $pambiente;
        public $tambiente;

        protected $rules = [

        'nombre_comunidad'=>'required|string',
        'ubicacion'=>'required|string',
        'coordinador'=>'',
        'telefonoc'=>'',
        'pfamiliar'=>'',
        'tfamiliar'=>'',
        'pjuvenil'=>'',
        'tjuvenil'=>'',
        'padolescentes'=>'',
        'tadolescentes'=>'',
        'pvocacional'=>'',
        'tvocacional'=>'',
        'psocial'=>'',
        'tsocial'=>'',
        'psalud'=>'',
        'tsalud'=>'',
        'pmisiones'=>'',
        'tmisiones'=>'',
        'pcatequesis'=>'',
        'tcatequesis'=>'',
        'pliturgica'=>'',
        'tliturgica'=>'',
        'ppenitenciaria'=>'',
        'tpenitenciaria'=>'',
        'pmovilidad'=>'',
        'tmovilidad'=>'',
        'peducativa'=>'',
        'teducativa'=>'',
        'puniversitaria'=>'',
        'tuniversitaria'=>'',
        'pcomunion'=>'',
        'tcomunion'=>'',
        'pecumenismo'=>'',
        'tecumenismo'=>'',
        'pambiente'=>'',
        'tambiente'=>''

        ];

    public function crearComunidad(){
        $datos = $this->validate();
        

        Comunidades::create([

        'nombre_comunidad'=>$datos['nombre_comunidad'],
        'ubicacion'=>$datos['ubicacion'],
        'coordinador'=>$datos['coordinador'],
        'telefonoc'=>$datos['telefonoc'],
        'pfamiliar'=>$datos['pfamiliar'],
        'tfamiliar'=>$datos['tfamiliar'],
        'pjuvenil'=>$datos['pjuvenil'],
        'tjuvenil'=>$datos['tjuvenil'],
        'padolescentes'=>$datos['padolescentes'],
        'tadolescentes'=>$datos['tadolescentes'],
        'pvocacional'=>$datos['pvocacional'],
        'tvocacional'=>$datos['tvocacional'],
        'psocial'=>$datos['psocial'],
        'tsocial'=>$datos['tsocial'],
        'psalud'=>$datos['psalud'],
        'tsalud'=>$datos['tsalud'],
        'pmisiones'=>$datos['pmisiones'],
        'tmisiones'=>$datos['tmisiones'],
        'pcatequesis'=>$datos['pcatequesis'],
        'tcatequesis'=>$datos['tcatequesis'],
        'pliturgica'=>$datos['pliturgica'],
        'tliturgica'=>$datos['tliturgica'],
        'ppenitenciaria'=>$datos['ppenitenciaria'],
        'tpenitenciaria'=>$datos['tpenitenciaria'],
        'pmovilidad'=>$datos['pmovilidad'],
        'tmovilidad'=>$datos['tmovilidad'],
        'peducativa'=>$datos['peducativa'],
        'teducativa'=>$datos['teducativa'],
        'puniversitaria'=>$datos['puniversitaria'],
        'tuniversitaria'=>$datos['tuniversitaria'],
        'pcomunion'=>$datos['pcomunion'],
        'tcomunion'=>$datos['tcomunion'],
        'pecumenismo'=>$datos['pecumenismo'],
        'tecumenismo'=>$datos['tecumenismo'],
        'pambiente'=>$datos['pambiente'],
        'tambiente'=>$datos['tambiente']        
    ]);

    //Crear un mensaje antes de redireccionar 

        session()->flash('mensaje', 'Comunidad creada correctamente');

        //Redireccionar

        return redirect()->route('menu.comunidades.index');
    }


    public function render()
    {
        $comunidades = DB::table('comunidades')->get(['nombre_comunidad', 'ubicacion']);

        return view('livewire.crear-comunidad', [$this->comunidades = $comunidades
    ]);
    }
}
