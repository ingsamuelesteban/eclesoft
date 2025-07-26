<x-app-layout>
    @include('menu.facturacion.navigation')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Menu Facturación') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if (auth()->user()->caja)
                <livewire:cerrar-caja :caja-id="$cajaId" />

            @else
                <livewire:abrir-caja />
            @endif
        </div>
    </div>
</x-app-layout>