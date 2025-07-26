<?php

namespace App\Http\Controllers;

use App\Models\Cuadre;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Parroquia;

class CuadreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('menu.facturacion.cuadre.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cuadre $cuadre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cuadre $cuadre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cuadre $cuadre)
    {
        //
    }

    public function pdf($id)
    {
        $cuadre = Cuadre::findOrFail($id);
        $parroquia = Parroquia::first();

        $customPaper = [0, 0, 204.09, 425.20]; // 72mm x 150mm en puntos (1mm = 2.83465pt)

        $pdf = Pdf::loadView('pdf.cuadre', ['cuadre' => $cuadre, 'parroquia' => $parroquia])->setPaper($customPaper);
        return $pdf->stream('cuadre.pdf');
    }
}
