<x-app-layout>
    @include('menu.certificaciones.navigation')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Certificaciones') }}
        </h2>
    </x-slot>
    @include('menu.nobautizado.navigation')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session()->has('mensaje'))
            <div class="uppercase border border-green-600 bg-green-100 text-green-600 font-bold p-2 my-3 text-sm">
              {{ session('mensaje')}} 
          </div>
        @endif
            
            <livewire:mostrar-no-bautizado/>
        </div>
    </div>
</x-app-layout>