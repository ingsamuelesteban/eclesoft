<x-app-layout>
    @include('menu.correcciones.navigation');
    @include('menu.correcciones.bautismo.navigation');
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Decretos de Bautismo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session()->has('mensaje'))
            <div class="uppercase border border-green-600 bg-green-100 text-green-600 font-bold p-2 my-3 text-sm">
              {{ session('mensaje')}} 
          </div>
        @endif
            
            <livewire:mostrar-correccionb/>
        </div>
    </div>
</x-app-layout>