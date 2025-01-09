<?php

namespace App\Http\Controllers;

use App\Models\Bautismos;
use App\Models\Diocesi;
use App\Models\Matrimonios;
use App\Models\Parroquia;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

use Illuminate\Support\Facades\DB;
class EstadisticasController extends Controller
{
    public function index(){
        return view('menu.estadisticas.index');
    }

    public function pdf($anoCelebracion){

        $parroquias = Parroquia::all();
        $diocesi = Diocesi::all();
        $totalBautizados = Bautismos::whereYear('fecha_celebracion',$anoCelebracion)->count();
        $bautizadosMenordeUno = Bautismos::whereRaw('YEAR(fecha_celebracion) = ? AND DATE_SUB(fecha_celebracion, INTERVAL 1 YEAR) < fecha_nacimiento',[$anoCelebracion])->count();
        $bautizadosUnoaSiete = Bautismos::whereRaw('YEAR(fecha_celebracion) = ? AND DATE_SUB(fecha_celebracion, INTERVAL 1 YEAR) >= fecha_nacimiento AND DATE_SUB(fecha_celebracion, INTERVAL 7 YEAR) <= fecha_nacimiento',[$anoCelebracion])->count();
        $bautizadosMayorDeSiete = Bautismos::whereRaw('YEAR(fecha_celebracion) = ? AND DATE_SUB(fecha_celebracion, INTERVAL 7 YEAR) > fecha_nacimiento',[$anoCelebracion])->count();
        $totalMatrimonios = Matrimonios::whereYear('fecha_celebracion',$anoCelebracion)->count();

        $pdf = PDF::loadView('menu.estadisticas.print', ['diocesi'=>$diocesi,'parroquia'=> $parroquias, 'anoCelebracion' => $anoCelebracion, 'bautizadosMenordeUno' => $bautizadosMenordeUno,  'bautizadosUnoaSiete' => $bautizadosUnoaSiete, 'bautizadosMayorDeSiete' => $bautizadosMayorDeSiete, 'totalMatrimonios' => $totalMatrimonios, 'totalBautizados' => $totalBautizados ]);
        $pdf->setPaper('letter', 'portrait');
        return $pdf->stream();
    }
}
