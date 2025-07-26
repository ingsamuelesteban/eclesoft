<?php

namespace App\Http\Controllers;

use App\Models\Caja;
use App\Models\CajaMovimiento;
use App\Models\Parroquia;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class CajaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('menu.facturacion.caja.index');
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
    public function show(Caja $caja)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Caja $caja)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Caja $caja)
    {
        //
    }

    /**
     * Generate a receipt for the given movement ID.
     */
    public function recibo($id)
    {
        $movimiento = CajaMovimiento::with('caja.user')->findOrFail($id);
        $parroquia = Parroquia::first();

        // Tamaño personalizado: 80mm x 150mm (ajusta la altura según tu necesidad)
        $customPaper = [0, 0, 204.77, 425.20]; // 80mm x 150mm en puntos (1mm = 2.83465pt)

        $pdf = Pdf::loadView('pdf.recibo', [
            'movimiento' => $movimiento,
            'parroquia' => $parroquia,
        ])->setPaper($customPaper);

        return $pdf->stream('recibo-caja-'.$movimiento->id.'.pdf');
    }

    public function cierre($id)
    {
        return view('menu.facturacion.caja.cierre', ['cajaId' => $id]);
    }
}
