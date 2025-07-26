<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Cuadre extends Component
{
    public function render()
    {
        $cuadres = \App\Models\Cuadre::with('User')->latest()->get();
        return view('livewire.cuadre', compact('cuadres'));
    }
}
