<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class MostrarUsuarios extends Component
{

    use WithPagination;

    public $nombre;
    public $email;

    public function buscar($nombre, $email){

        $this->nombre = $nombre;
        $this->email = $email;

    }

    protected $listeners = ['eliminarUsuario', 'criteriosBusqueda' => 'buscar'];

    public function eliminarUsuario(User $user){
        $user->delete();
    }

    
    public function render()
    {

        $usuarios = User::when($this->nombre, function($query){
            $query->where('name', 'LIKE', "%" . $this->nombre . "%");
        })
        -> when($this->email, function($query){
            $query->where('email', 'LIKE', "%" . $this->email . "%");
        })->orderBy('name', 'asc')->paginate(10)
        ;

        return view('livewire.mostrar-usuarios', ['usuarios'=>$usuarios]);
    }
}
