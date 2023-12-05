<?php

namespace App\Http\Livewire;

use App\Models\NoBautizado;
use Livewire\Component;

class ShowNoBautizado extends Component
{

    public function export(NoBautizado $noBautizado)
    {
        $hospital = $noBautizado ->hospital;
        dd($noBautizado);
    // return response()->download(global_asset('storage/img' . $hospital));
    }

    public function render()
    {
        return view('livewire.show-no-bautizado');
    }
}
