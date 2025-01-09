<?php

namespace App\Http\Controllers;

use App\Models\Bautismos;
use App\Models\Diocesi;
use App\Models\Matrimonios;
use App\Models\Parroquia;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parroquia = Parroquia::all();
        $diocesis = Diocesi::all();
        $anoActual = Carbon::now()->isoFormat('Y');
        $bautismosDelAno = Bautismos::whereYear('fecha_celebracion',$anoActual )->count();
        $matrimoniosDelAno = Matrimonios::whereYear('fecha_celebracion',$anoActual )->count();
        return view('menu.index', [
            'parroquia' => $parroquia, 'diocesis' => $diocesis, 'bautismosDelAno' => $bautismosDelAno, 'matrimoniosDelAno' => $matrimoniosDelAno
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menu.create');
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
