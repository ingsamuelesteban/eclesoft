<x-app-layout>
    @include('menu.diocesis.navigation')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Administrar Sistema Obispado') }}
        </h2>
    </x-slot>

    <div class="py-12">

        @if (session()->has('mensaje'))
                    <div class="uppercase border border-green-600 bg-green-100 text-green-600 font-bold p-2 my-3 text-sm">
                      {{ session('mensaje')}} 
                  </div>
                @endif
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <livewire:mostrar-diocesis/>
        </div>
    </div>
</x-app-layout>