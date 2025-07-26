<?php

namespace App\Http\Controllers;

use App\Models\Bautismos;
use App\Models\Decretos;
use App\Models\Parroquia;
use App\Models\Impresione;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

class DecretosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('menu.decretos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Bautismos $bautismo)
    {
        return view('menu.decretos.create', [
            'bautismo' => $bautismo
        ]);
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
    public function show(Decretos $decreto)
    {
        return view('menu.decretos.show',[
            'decreto' => $decreto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Decretos $decreto)
    {

        
        return view('menu.decretos.edit',[

        'decreto' => $decreto]);
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

    public function pdf(Decretos $decreto)
    {
        $diac = Carbon::now('America/La_Paz')->isoFormat('DD');
        $mesc = Carbon::now('America/La_Paz')->isoFormat('MMMM');
        $anoc = Carbon::now('America/La_Paz')->isoFormat('Y');

        $parroquias = Parroquia::all();

        $impresion = new Impresione();
        $impresion->decreto_id = $decreto->id;
        $impresion->save();
        $pdf = PDF::loadView('menu.decretos.print', ['decreto' => $decreto, 'parroquia' => $parroquias, 'diac' => $diac, 'mesc' => $mesc, 'anoc' => $anoc ]);
        $pdf->setPaper('letter', 'portrait');
        return $pdf->stream(); 

     /*   return view('menu.decretos.print', ['decreto' => $decreto, 'parroquia' => $parroquias, 'diac' => $diac, 'mesc' => $mesc, 'anoc' => $anoc]);
        */
    }
}
