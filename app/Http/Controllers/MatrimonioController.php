<?php

namespace App\Http\Controllers;


use App\Models\Bautismos;
use App\Models\Matrimonios;
use App\Models\Parroquia;
use App\Models\Impresione;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class MatrimonioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('menu.matrimonios.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menu.matrimonios.create');
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
    public function show(Matrimonios $matrimonio)
    {
        return view('menu.matrimonios.show', ['matrimonio'=> $matrimonio]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Matrimonios $matrimonio)
    {
        return view('menu.matrimonios.edit', [
            'matrimonio' => $matrimonio
        ]);
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

    public function pdf(Matrimonios $matrimonio)
    {
        $parroquias = Parroquia::all();
        $diac = Carbon::now('America/La_Paz')->isoFormat('D');
        $mesc = Carbon::now()->isoFormat('MMMM');
        $anoc = Carbon::now()->isoFormat('Y');
        $fechac = Carbon::parse($matrimonio->fecha_celebracion)->isoFormat('L');
        $fechat = Carbon::parse($matrimonio->fecha_transcripcion)->isoFormat('L');
    
        $impresion = new Impresione();
        $impresion->matrimonio_id = $matrimonio->id;
        $impresion->save();
        $codigoQr = base64_encode(QrCode::format('svg')->size(50)->errorCorrection('H')->generate(route('menu.bautismos.confqr',['impresione' => $impresion->id])));
        $pdf = PDF::loadView('menu.matrimonios.print', ['matrimonio' => $matrimonio, 'parroquia' => $parroquias, 'diac' => $diac, 'mesc' => $mesc, 'anoc' => $anoc, 'fechac' => $fechac, 'fechat' => $fechat, 'codigoQr' =>$codigoQr ]);
        $pdf->setPaper('letter', 'portrait');
       return $pdf->stream();

      // return view('menu.bautismos.print',['bautismo' => $bautismo, 'parroquia' => $parroquias, 'dian' => $dian, 'mesn' => $mesn, 'anon' => $anon, 'diab' => $diab, 'mesb' => $mesb, 'anob' => $añob, 'diac' => $diac, 'mesc' => $mesc, 'anoc' => $anoc]);
        
    }

    public function decreto(Matrimonios $matrimonio)
    {
        return view('menu.matrimonios.decreto', ['matrimonio'=> $matrimonio]);
    }

    
}
