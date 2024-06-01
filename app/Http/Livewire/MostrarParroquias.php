<?php

namespace App\Http\Livewire;

use App\Models\Parroquia;
use App\Models\Parroquiaz;
use Livewire\Component;

class MostrarParroquias extends Component
{
    public function render()
    {

        return view('livewire.mostrar-parroquias',['parroquias' => Parroquiaz::paginate(10)]);
    }
}
