<?php

namespace App\Http\Controllers;

use App\Models\Correccionb;
use App\Models\Diocesi;
use App\Models\Documentcb;
use App\Models\Parroquia;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CorreccionesController extends Controller
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
        return view('menu.correcciones.index',['parroquia' => $parroquia, 'diocesis' => $diocesis]);
    }

    public function bautismos()
    {
        return view('menu.correcciones.bautismo.create');
    }

    public function bautismosIndex(){
        return view('menu.correcciones.bautismo.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
    public function bautismosShow(Correccionb $correccionb)
    {
        //dd($correccionb->id);
        $diocesi = Diocesi::where('id',1)->get();
        
        $documentos = Documentcb::where('correccionb_id', $correccionb->id)->get();
        return view('menu.correcciones.bautismo.show', ['correccionb'=>$correccionb, 'documentos'=>$documentos, 'diocesi'=>$diocesi]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function bautismosEdit(Correccionb $correccionb)
    {
        return view('menu.correcciones.bautismo.edit',['correccionb'=>$correccionb]);
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

    public function bautismosPrint(Correccionb $correccionb)
    {

      
        $documentos = Documentcb::where('correccionb_id', $correccionb->id)->get(); 
        $diac = Carbon::now('America/La_Paz')->isoFormat('DD');
        $mesc = Carbon::now('America/La_Paz')->isoFormat('MMMM');
        $anoc = Carbon::now('America/La_Paz')->isoFormat('Y');

        $diocesis = Diocesi::all();
       

         $pdf = PDF::loadView('menu.correcciones.bautismo.print', ['correccionb' => $correccionb, 'diocesis' => $diocesis, 'diac' => $diac, 'mesc' => $mesc, 'anoc'=>$anoc, 'documentos'=>$documentos]);
        $pdf->setPaper('letter', 'portrait');
        return $pdf->stream(); 
    }
}
