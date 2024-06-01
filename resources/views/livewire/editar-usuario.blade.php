<form class="md:w-full space-y-5" wire:submit.prevent='editarUsuario'>



    <div class="py-12">
        <div class="md:w-1/2 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
<!-- Name -->
<div>
    <x-input-label for="name" :value="__('Nombre')" />

    <x-text-input id="name" class="block mt-1 w-full" type="text" wire:model="name" :value="old('name')" required autofocus />
    @error('name')
    <livewire:mostrar-alertas :message="$message" />
    @enderror
</div>

<!-- Email Address -->
<div class="mt-4">
    <x-input-label for="email" :value="__('Email')" />

    <x-text-input id="email" class="block mt-1 w-full" type="email" wire:model="email" :value="old('email')" required />
    @error('email')
    <livewire:mostrar-alertas :message="$message" />
    @enderror
</div>

<!-- ROL -->

@if (Auth::user()->rol==1)
<div class="mt-4">
    <x-input-label for="rol" :value="__('Tipo de Acceso')" />

    <select wire:model="rol" id="rol" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full">
            <option value="">-- Selecciona un rol -- </option>
            <option value="1">-- Administrador -- </option>
            <option value="2">-- Oficinista -- </option>
    

    </select>
    @error('rol')
    <livewire:mostrar-alertas :message="$message" />
    @enderror
    
</div> 
@else
<div class="mt-4">
    <x-input-label for="rol" :value="__('Tipo de Acceso')" />

    <select wire:model="rol" id="rol" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full" disabled>
            <option value="">-- Selecciona un rol -- </option>
            <option value="1">-- Administrador -- </option>
            <option value="2">-- Oficinista -- </option>
    

    </select>
    @error('rol')
    <livewire:mostrar-alertas :message="$message" />
    @enderror
    
</div>
@endif

@if (Auth::user()->id==$usuario_id)
    <!-- Password -->
<div class="mt-4">
    <x-input-label for="password" :value="__('Contraseña')" />

    <x-text-input id="password" class="block mt-1 w-full"
                    type="password"
                    wire:model="password"
                    required autocomplete="new-password" />
    
                    @error('password')
                    <livewire:mostrar-alertas :message="$message" />
                    @enderror
</div>

<!-- Confirm Password -->
<div class="mt-4">
    <x-input-label for="password_confirmation" :value="__('Repite la contraseña')" />

    <x-text-input id="password_confirmation" class="block mt-1 w-full"
                    type="password"
                    wire:model="password_confirmation" required />
</div>
@endif



      


        

<x-primary-button class="w-full justify-center mt-5">
    {{ __('Editar Cuenta') }}
</x-primary-button>
        
    
 </form>
</div>
</div>
</div>
</div>
