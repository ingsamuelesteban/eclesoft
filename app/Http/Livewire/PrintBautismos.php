<?php

namespace App\Http\Livewire;

use App\Models\Bautismos;
use App\Models\Parroquia;
use Livewire\Component;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Barryvdh\DomPDF\Facade\Pdf;

class PrintBautismos extends Component
{

    public function render()
    {
        $bautismos = Bautismos::all();
        $parroquia = Parroquia::all();
        return view('livewire.print-bautismos', [
            'bautismos' => $bautismos,
            'parroquia'=> $parroquia
        ]);
    }

    public function imprimirBautismo(){

        $parroquia = Parroquia::all();

        //$pdf = PDF::loadView('menu.bautismos.print');
        //$pdf->loadHTML('<h1>Test</h1>');
        //return $pdf->stream();
    
        $pdf = Pdf::loadView('menu.bautismos.print', $data=['parroquia']);
        return $pdf->stream('invoice.pdf');
        }
}
