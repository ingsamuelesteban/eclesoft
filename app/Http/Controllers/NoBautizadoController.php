<?php

namespace App\Http\Controllers;

use App\Models\NoBautizado;
use App\Models\Parroquia;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use App\Models\Impresione;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class NoBautizadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('menu.nobautizado.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menu.nobautizado.create');
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
    public function show(NoBautizado $noBautizado)
    {
        return view('menu.nobautizado.show', ['noBautizado'=> $noBautizado]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(NoBautizado $noBautizado)
    {
        return view('menu.nobautizado.edit', ['noBautizado' => $noBautizado]);
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

    public function pdf(NoBautizado $noBautizado)
    {
        $dian = Carbon::parse($noBautizado->fecha_nacimiento)->format('d');
        $mesn = Carbon::parse($noBautizado->fecha_nacimiento)->isoFormat('MMMM');
        $anon = Carbon::parse($noBautizado->fecha_nacimiento)->isoFormat('Y');
        $fechan = Carbon::parse($noBautizado->fecha_nacimiento)->isoFormat('L');
        $diac = Carbon::now('America/La_Paz')->isoFormat('DD');
        $mesc = Carbon::now('America/La_Paz')->isoFormat('MMMM');
        $anoc = Carbon::now('America/La_Paz')->isoFormat('Y');

        $parroquias = Parroquia::all();

        $impresion = new Impresione();
        $impresion->no_bautizado_id = $noBautizado->id;
        $impresion->save();
        $codigoQr = base64_encode(QrCode::format('svg')->size(50)->errorCorrection('H')->generate(route('menu.bautismos.confqr',['impresione' => $impresion->id])));
        
        $pdf = PDF::loadView('menu.nobautizado.print', ['noBautizado' => $noBautizado, 'parroquia' => $parroquias, 'diac' => $diac, 'mesc' => $mesc, 'anoc'=>$anoc, 'dian' => $dian, 'mesn' => $mesn, 'anon' => $anon, 'codigoQr' => $codigoQr, 'fechan' => $fechan])
            
            ->setPaper('letter', 'portrait');
        return $pdf->stream();
        

      // return view('menu.bautismos.print',['bautismo' => $bautismo, 'parroquia' => $parroquias, 'dian' => $dian, 'mesn' => $mesn, 'anon' => $anon, 'diab' => $diab, 'mesb' => $mesb, 'anob' => $añob, 'diac' => $diac, 'mesc' => $mesc, 'anoc' => $anoc]);
        
    }
}
