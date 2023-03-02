<x-app-layout>
    @include('menu.comunidades.navigation')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Menu Comunidades') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <livewire:mostrar-comunidades/>
        </div>
    </div>
</x-app-layout>