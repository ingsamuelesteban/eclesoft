<?php

namespace App\Http\Controllers;

use App\Models\Bautismos;
use App\Models\Parroquia;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

class BautismoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('menu.bautismos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menu.bautismos.create');
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
    public function pdf(Bautismos $bautismo)
    {
        $parroquias = Parroquia::all();
        $dian = Carbon::parse($bautismo->fecha_nacimiento)->format('d');
        $mesn = Carbon::parse($bautismo->fecha_nacimiento)->formatLocalized('%B');
        $anon = Carbon::parse($bautismo->fecha_nacimiento)->formatLocalized('%Y');
        $diab = Carbon::parse($bautismo->fecha_celebracion)->format('d');
        $mesb = Carbon::parse($bautismo->fecha_celebracion)->isoFormat('MMMM');
        $añob = Carbon::parse($bautismo->fecha_celebracion)->isoFormat('Y');
        $diac = Carbon::now()->isoFormat('DD');
        $mesc = Carbon::now()->isoFormat('MMMM');
        $anoc = Carbon::now()->isoFormat('Y');
    

        $pdf = PDF::loadView('menu.bautismos.print', ['bautismo' => $bautismo, 'parroquia' => $parroquias,  'dian' => $dian, 'mesn' => $mesn, 'anon' => $anon, 'diab' => $diab, 'mesb' => $mesb, 'anob' => $añob, 'diac' => $diac, 'mesc' => $mesc, 'anoc' => $anoc ]);
       return $pdf->stream();

      // return view('menu.bautismos.print',['bautismo' => $bautismo, 'parroquia' => $parroquias, 'dian' => $dian, 'mesn' => $mesn, 'anon' => $anon, 'diab' => $diab, 'mesb' => $mesb, 'anob' => $añob, 'diac' => $diac, 'mesc' => $mesc, 'anoc' => $anoc]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Bautismos $bautismo)
    {
        return view('menu.bautismos.edit', [
            'bautismo' => $bautismo
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



    

   
}
