<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Caja;
use Illuminate\Support\Facades\Auth;

class AbrirCaja extends Component
{
    public $monto;

    public function abrirCaja()
    {
        $this->validate([
            'monto' => 'required|numeric|min:0.01',
        ]);

        Caja::create([
            'fondo' => $this->monto,
            'estado' => 1,
            'user_id' => Auth::id(),
        ]);

        return redirect(request()->header('Referer'));
    }

    public function render()
    {
        return view('livewire.abrir-caja');
    }
}
