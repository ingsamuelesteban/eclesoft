<?php

namespace App\Http\Controllers;

use App\Models\Confirmacion;
use App\Models\Diocesi;
use App\Models\Parroquiaz;
use Barryvdh\DomPDF\Facade\Pdf;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Luecano\NumeroALetras\NumeroALetras;

class ConfirmacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('menu.confirmacion.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menu.confirmacion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Confirmacion $confirmacion)
    {

      
        return view('menu.confirmacion.show',['confirmacion'=>$confirmacion]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Confirmacion $confirmacion)
    {
        return view('menu.confirmacion.edit',['confirmacion'=>$confirmacion]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function pdf(Confirmacion $confirmacion)
    {
        $dia = Carbon::parse($confirmacion->fecha_celebracion)->format('d');
        $mes = Carbon::parse($confirmacion->fecha_celebracion)->isoFormat('MMMM');
        $ano = Carbon::parse($confirmacion->fecha_celebracion)->isoFormat('Y');
        $diac = Carbon::now('America/La_Paz')->isoFormat('DD');
        $mesc = Carbon::now('America/La_Paz')->isoFormat('MMMM');
        $anoc = Carbon::now('America/La_Paz')->isoFormat('Y');

        $diocesis = Diocesi::all();
        $pdf = PDF::loadView('menu.confirmacion.print', ['confirmacion' => $confirmacion, 'diocesis' => $diocesis, 'diac' => $diac, 'mesc' => $mesc, 'anoc'=>$anoc, 'dia' => $dia, 'mes' => $mes, 'ano' => $ano]);
        $pdf->setPaper('letter', 'portrait');
        return $pdf->stream();

      // return view('menu.bautismos.print',['bautismo' => $bautismo, 'parroquia' => $parroquias, 'dian' => $dian, 'mesn' => $mesn, 'anon' => $anon, 'diab' => $diab, 'mesb' => $mesb, 'anob' => $añob, 'diac' => $diac, 'mesc' => $mesc, 'anoc' => $anoc]);
        
    }
}
