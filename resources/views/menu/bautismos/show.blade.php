<x-app-layout>
    @include('menu.bautismos.navigation');
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $bautismo->nombre}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg " >
                <div class="p-10">
                    <div class="mb-5">
                        <h3 class="font-bold text-3xl text-gray-800 my-3">
                            {{ $bautismo->nombre}}
                        </h3>

                        <div>
                            <h3 class="font-bold text-3xl text-gray-800 my-3 text-center">Datos del Libro de Bautismo</h3>
                            <div class="grid grid-cols-3">
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Libro:
                                    <span class="normal-case font-normal">{{ $bautismo->libro_bautismo}}</span>
                                </p>
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Folio:
                                    <span class="normal-case font-normal">{{ $bautismo->folio_bautismo}}</span>
                                </p>
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Acta
                                    <span class="normal-case font-normal">{{ $bautismo->no_bautismo}</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>