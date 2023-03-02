<?php

namespace App\Http\Livewire;

use App\Models\Parroquia;
use Livewire\Component;

class MostrarParroquia extends Component
{
    public function render()
    {
        $parroquia = Parroquia::all();
        return view('livewire.mostrar-parroquia',[ 'parroquia' => $parroquia]);
    }
}
