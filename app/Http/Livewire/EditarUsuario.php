<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Component;

class EditarUsuario extends Component
{

    public $name;
    public $email;
    public $rol;
    public $usuario_id;
    public $password;
    public $password_confirmation;

    public function mount(User $usuario)
    {
        $this->name = $usuario->name;
        $this->email = $usuario->email;
        $this->rol = $usuario->rol;
        $this->usuario_id = $usuario->id;
    }

    public function editarUsuario(){
        $datos = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'rol' => ['required', 'numeric', 'between:1,2']
        ]);

        $usuario = User::find($this->usuario_id);

        $usuario->name = $datos['name'];
        $usuario->email = $datos['email'];
        $usuario->rol = $datos['rol'];
        $usuario->password = Hash::make( $datos['password']);

        $usuario->save();

        session()->flash('mensaje', 'Datos modificados');

        return redirect()->route('menu.diocesis.usuarios.index');
    }
    public function render()
    {
        return view('livewire.editar-usuario');
    }
}
