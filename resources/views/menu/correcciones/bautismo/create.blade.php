<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
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
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if (session()->has('mensaje'))
                    <div class="uppercase border border-green-600 bg-green-100 text-green-600 font-bold p-2 my-3 text-sm">
                      {{ session('mensaje')}} 
                  </div>
                @endif
                    <div class="md:flex md:justify-center p-5">
                        <livewire:correccion-bautismo/>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>