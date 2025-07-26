<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Factura;

class Facturas extends Component
{
    public function render()
    {
        $facturas = \App\Models\Factura::with([
            'impresiones.Bautismo',
            'impresiones.Decreto',
            'impresiones.Decretosm',
            'impresiones.Matrimonio',
            'impresiones.NoBautizado',
            'impresiones.User',
        ])->latest()->get();

        return view('livewire.facturas', compact('facturas'));
    }
}
