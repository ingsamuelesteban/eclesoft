<x-app-layout>
    @include('menu.matrimonios.navigation');
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Confirmar Datos de Acta de Matrimonio') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg " >
                <div class="p-10">
                    <div class="mb-5">
                        <h3 class="font-bold text-3xl text-gray-800 my-3 text-center">
                            {{ $matrimonio->nombre_esposo}} y {{ $matrimonio->nombre_esposa}}
                        </h3>

                        <div>
                            <h2 class="block text-md text-gray-700 font-bold uppercase mb-2 text-center mt-2">Datos del libro de Matrimonio</h2>
                            <div class="grid grid-cols-3">
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Libro:
                                    <span class="normal-case font-normal">{{ $matrimonio->libro_matrimonio}}</span>
                                </p>
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Folio:
                                    <span class="normal-case font-normal">{{ $matrimonio->folio_matrimonio}}</span>
                                </p>
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Acta:
                                    <span class="normal-case font-normal">{{ $matrimonio->no_matrimonio}}</span>
                                </p>
                            </div>
                        </div>
                        <div>
                            <h2 class="block text-md text-gray-700 font-bold uppercase mb-2 text-center mt-2">Datos de la Celebración</h2>
                            <div class="grid grid-cols-2">
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Fecha:
                                    <span class="normal-case font-normal">{{ \Carbon\Carbon::parse($matrimonio->fecha_celebracion)->isoFormat('LL')}}</span>
                                </p>
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Celebrante:
                                    <span class="normal-case font-normal">{{ $matrimonio->celebrante_name}}</span>
                                </p>
                            </div>
                        </div>
                        <div>
                            <h2 class="block text-md text-gray-700 font-bold uppercase mb-2 text-center mt-2">Datos de los Esposos</h2>
                            <div class="grid grid-cols-2">
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Esposo:
                                    <span class="normal-case font-normal">{{ $matrimonio->nombre_esposo}}</span>
                                </p>
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Esposo:
                                    <span class="normal-case font-normal">{{ $matrimonio->nombre_esposa}}</span>
                                </p>
                            </div>
                            <div class="grid grid-cols-2">
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Documento Esposo:
                                    <span class="normal-case font-normal">{{ $matrimonio->documento_esposo}}</span>
                                </p>
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Documento Esposa:
                                    <span class="normal-case font-normal">{{ $matrimonio->documento_esposa}}</span>
                                </p>
                            </div>
                        </div>
                        <div>
                            <h2 class="block text-md text-gray-700 font-bold uppercase mb-2 text-center mt-2">Datos de los Testigos</h2>
                            <div class="grid grid-cols-2">
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Padrino:
                                    <span class="normal-case font-normal">{{ $matrimonio->nombre_padrino}}</span>
                                </p>
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Madrina:
                                    <span class="normal-case font-normal">{{ $matrimonio->nombre_madrina}}</span>
                                </p>
                            </div>
                            <div class="grid grid-cols-2">
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Documento Padrino:
                                    <span class="normal-case font-normal">{{ $matrimonio->documento_padrino}}</span>
                                </p>
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Documento Madrina:
                                    <span class="normal-case font-normal">{{ $matrimonio->documento_madrina}}</span>
                                </p>
                            </div>
                        </div>
                        <div>
                            <h2 class="block text-md text-gray-700 font-bold uppercase mb-2 text-center mt-2">Datos del Libro del Registro Civil</h2>
                            <div class="grid grid-cols-4">
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Fecha:
                                    <span class="normal-case font-normal">{{ \Carbon\Carbon::parse($matrimonio->fecha_transcripcion)->isoFormat('LL')}}</span>
                                </p>
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Libro:
                                    <span class="normal-case font-normal">{{ $matrimonio->no_libro}}</span>
                                </p>
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Folio:
                                    <span class="normal-case font-normal">{{ $matrimonio->folio}}</span>
                                </p>
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">No. de Transcripción:
                                    <span class="normal-case font-normal">{{ $matrimonio->no_transcripcion}}</span>
                                </p>
                            </div>
                           
                    <div class="flex flex-col md:flex-row items-stretch gap-3  mt-5 md:mt-0">
                        <a href="{{ route('menu.matrimonios.print', $matrimonio->id)}}" class="bg-slate-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center " target="_blank">
                            Imprimir
                        </a>
    
                        <a href="{{ route('menu.matrimonios.edit', $matrimonio->id)}}" class="bg-blue-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center ">
                            Editar
                        </a>

                        <a href="{{ route('menu.matrimonios.decreto', $matrimonio->id)}}" class="bg-teal-500 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center ">
                            Decreto
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>