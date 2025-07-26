<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Models\Parroquia;

class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(Factura $factura)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Factura $factura)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Factura $factura)
    {
        //
    }

    public function imprimir($id)
    {
        $factura = Factura::with(['User', 'CajaFactura', 'Impresiones'])->findOrFail($id);

        $parroquia = Parroquia::first();
        $customPaper = [0, 0, 204.09, 425.20]; // 80mm x 150mm en puntos
        $pdf = Pdf::loadView('pdf.factura', [
            'factura' => $factura,
            'parroquia' => $parroquia,
        ])->setPaper($customPaper);

        return $pdf->stream('factura-'.$factura->id.'.pdf');
    }
}
