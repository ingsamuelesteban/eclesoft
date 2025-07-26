<?php

namespace App\Http\Controllers;

use App\Models\Impresione;
use Illuminate\Http\Request;
use App\Models\Parroquia;
use App\Models\Matrimonios;

class ImpresioneController extends Controller
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
    public function show(Impresione $impresione)
    {
        $parroquias = Parroquia::all();
        if ($impresione->bautismo_id!=null) {
           return view('menu.bautismos.confqr', ['parroquias'=>$parroquias, 'impresion'=>$impresione]);
        } elseif ($impresione->matrimonio_id!=null) {
            return view('menu.matrimonios.confqr', ['parroquias'=>$parroquias, 'impresion'=>$impresione]);
        } elseif ($impresione->no_bautizado_id!=null) {
            return view('menu.nobautizado.confqr', ['parroquias'=>$parroquias, 'impresion'=>$impresione]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Impresione $impresione)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Impresione $impresione)
    {
        //
    }
}
