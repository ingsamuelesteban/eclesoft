<?php

namespace App\Http\Livewire;
use App\Models\Bautismos;
use App\Models\Matrimonios;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class Estadisticas extends Component
{
    use WithPagination;

    public $anoBusqueda;

    public function buscar($anoBusqueda){
        $this->anoBusqueda = $anoBusqueda;
    }

    protected $listeners = ['criteriosBusqueda' => 'buscar'];


/*     public function render()
    {
        
        $anoCelebracion = $this->anoBusqueda;
        $totalBautizados = Bautismos::whereYear('fecha_celebracion',$anoCelebracion)->count();
        $bautizadosMenordeUno = Bautismos::whereRaw('YEAR(fecha_celebracion) = ? AND DATE_SUB(fecha_celebracion, INTERVAL 1 YEAR) < fecha_nacimiento',[$anoCelebracion])->count();
        $bautizadosUnoaSiete = Bautismos::whereRaw('YEAR(fecha_celebracion) = ? AND DATE_SUB(fecha_celebracion, INTERVAL 1 YEAR) >= fecha_nacimiento AND DATE_SUB(fecha_celebracion, INTERVAL 7 YEAR) <= fecha_nacimiento',[$anoCelebracion])->count();
        $bautizadosMayorDeSiete = Bautismos::whereRaw('YEAR(fecha_celebracion) = ? AND DATE_SUB(fecha_celebracion, INTERVAL 7 YEAR) > fecha_nacimiento',[$anoCelebracion])->count();
        $totalMatrimonios = Matrimonios::whereYear('fecha_celebracion',$anoCelebracion)->count();
        return view('livewire.estadisticas',['anoCelebracion'=>$anoCelebracion,'totalBautizados'=> $totalBautizados,'bautizadosMayorDeSiete' => $bautizadosMayorDeSiete, 'bautizadosMenordeUno' => $bautizadosMenordeUno, 'bautizadosUnoaSiete' => $bautizadosUnoaSiete, 'totalMatrimonios' =>$totalMatrimonios]);
    } */

    public function render()
    {
        if (empty($this->anoBusqueda)) {
            $anoCelebracion = (Carbon::now()->isoFormat('Y'))-1;
        } else {
            $anoCelebracion = $this->anoBusqueda;
        }
        
        $totalBautizados = Bautismos::whereYear('fecha_celebracion',$anoCelebracion)->count();
        $bautizadosMenordeUno = Bautismos::whereRaw('YEAR(fecha_celebracion) = ? AND DATE_SUB(fecha_celebracion, INTERVAL 1 YEAR) < fecha_nacimiento',[$anoCelebracion])->count();
        $bautizadosUnoaSiete = Bautismos::whereRaw('YEAR(fecha_celebracion) = ? AND DATE_SUB(fecha_celebracion, INTERVAL 1 YEAR) >= fecha_nacimiento AND DATE_SUB(fecha_celebracion, INTERVAL 7 YEAR) <= fecha_nacimiento',[$anoCelebracion])->count();
        $bautizadosMayorDeSiete = Bautismos::whereRaw('YEAR(fecha_celebracion) = ? AND DATE_SUB(fecha_celebracion, INTERVAL 7 YEAR) > fecha_nacimiento',[$anoCelebracion])->count();
        $totalMatrimonios = Matrimonios::whereYear('fecha_celebracion',$anoCelebracion)->count();
        return view('livewire.estadisticas',['anoCelebracion'=>$anoCelebracion,'totalBautizados'=> $totalBautizados,'bautizadosMayorDeSiete' => $bautizadosMayorDeSiete, 'bautizadosMenordeUno' => $bautizadosMenordeUno, 'bautizadosUnoaSiete' => $bautizadosUnoaSiete, 'totalMatrimonios' =>$totalMatrimonios]);
    
    }
}
