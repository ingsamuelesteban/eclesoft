<?php

namespace App\Http\Livewire;

use App\Models\Diocesi;
use Livewire\Component;

class MostrarDiocesis extends Component
{
    public function render()
    {
        $diocesis = Diocesi::all();


        return view('livewire.mostrar-diocesis', ['diocesis' => $diocesis]);
    }
}
