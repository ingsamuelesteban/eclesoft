<x-app-layout>
    @include('menu.comunidades.navigation')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Menú Comunidades de la Parroquia') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  
                    <div class="md:flex md:justify-center p-3">
                        <livewire:crear-comunidad/>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>