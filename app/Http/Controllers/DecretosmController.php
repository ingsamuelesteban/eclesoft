<?php

namespace App\Http\Controllers;

use App\Models\Decretosm;
use App\Models\Parroquia;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DecretosmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Decretosm $decretosm)
    {
        return view('menu.decretosm.index', ['decretosm' => $decretosm]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function show(Decretosm $decretom)
    {
        return view('menu.decretosm.show', ['decretom' => $decretom]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Decretosm $decretom)
    {
        return view('menu.decretosm.edit', ['decretom' => $decretom]);
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

    public function pdf(Decretosm $decretom)
    {
        $diac = Carbon::now('America/La_Paz')->isoFormat('DD');
        $mesc = Carbon::now('America/La_Paz')->isoFormat('MMMM');
        $anoc = Carbon::now('America/La_Paz')->isoFormat('Y');

        $parroquias = Parroquia::all();
       $pdf = PDF::loadView('menu.decretosm.print', ['decretom' => $decretom, 'parroquia' => $parroquias, 'diac' => $diac, 'mesc' => $mesc, 'anoc' => $anoc ]);
        $pdf->setPaper('letter', 'portrait');
        return $pdf->stream(); 

     /*   return view('menu.decretos.print', ['decreto' => $decreto, 'parroquia' => $parroquias, 'diac' => $diac, 'mesc' => $mesc, 'anoc' => $anoc]);
        */
    }
}
