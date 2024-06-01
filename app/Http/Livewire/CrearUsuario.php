<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

use Illuminate\Validation\Rules;


class CrearUsuario extends Component
{

    
    public $name;
    public $email;
    public $password;
    public $rol;
    public $departamento;
    public $password_confirmation;

 

    public function crearUsuario(){
        $datos = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'rol' => ['required', 'numeric', 'between:1,2']
        ]);

       
        User::create([
            'name' => $datos['name'],
            'email' => $datos['email'],
            'password' =>Hash::make($datos['password']),
            'rol' => $datos['rol'],
            'departamento' => 1,

        ]);

        session()->flash('mensaje', 'Usuario creado Correctamente');

        return redirect()->route('menu.diocesis.usuarios.index');
    }
    public function render()
    {
        return view('livewire.crear-usuario');
    }
}
