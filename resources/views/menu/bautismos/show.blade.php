<x-app-layout>
    @include('menu.bautismos.navigation');
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Confirmar Datos de Acta de Bautismo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg " >
                <div class="p-10">
                    <div class="mb-5">
                        <h3 class="font-bold text-3xl text-gray-800 my-3 text-center">
                            {{ $bautismo->nombre}}
                        </h3>

                        <div>
                            <h2 class="block text-md text-gray-700 font-bold uppercase mb-2 text-center mt-2">Datos del libro de Bautismo</h2>
                            <div class="grid grid-cols-3">
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Libro:
                                    <span class="normal-case font-normal">{{ $bautismo->libro_bautismo}}</span>
                                </p>
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Folio:
                                    <span class="normal-case font-normal">{{ $bautismo->folio_bautismo}}</span>
                                </p>
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Acta:
                                    <span class="normal-case font-normal">{{ $bautismo->no_bautismo}}</span>
                                </p>
                            </div>
                        </div>
                        <div>
                            <h2 class="block text-md text-gray-700 font-bold uppercase mb-2 text-center mt-2">Datos de la Celebración</h2>
                            <div class="grid grid-cols-4">
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Parroquia:
                                    <span class="normal-case font-normal">{{ $bautismo->parroquia}}</span>
                                </p>
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Lugar:
                                    <span class="normal-case font-normal">{{ $bautismo->ub_parroquia}}</span>
                                </p>
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Fecha:
                                    <span class="normal-case font-normal">{{ \Carbon\Carbon::parse($bautismo->fecha_celebracion)->isoFormat('L')}}</span>
                                </p>
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Celebrante:
                                    <span class="normal-case font-normal">{{ $bautismo->celebrante}}</span>
                                </p>
                            </div>
                        </div>
                        <div>
                            <h2 class="block text-md text-gray-700 font-bold uppercase mb-2 text-center mt-2">Datos del Bautizado</h2>
                            <div class="grid grid-cols-4">
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Nombre:
                                    <span class="normal-case font-normal">{{ $bautismo->nombre}}</span>
                                </p>
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Genero:
                                    <span class="normal-case font-normal">{{ $bautismo->genero}}</span>
                                </p>
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Lugar de Nacimiento:
                                    <span class="normal-case font-normal">{{ $bautismo->lugar_nacimiento}}</span>
                                </p>
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Fecha de Nacimiento:
                                    <span class="normal-case font-normal">{{ \Carbon\Carbon::parse($bautismo->fecha_nacimiento)->isoFormat('L')}}</span>
                                </p>
                            </div>
                        </div>
                        <div>
                            <h2 class="block text-md text-gray-700 font-bold uppercase mb-2 text-center mt-2">Datos de los Padres</h2>
                            <div class="grid grid-cols-2">
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Padre:
                                    <span class="normal-case font-normal">{{ $bautismo->nombre_padre}}</span>
                                </p>
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Madre:
                                    <span class="normal-case font-normal">{{ $bautismo->nombre_madre}}</span>
                                </p>
                            </div>
                            <div class="grid grid-cols-2">
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Cedula Padre:
                                    <span class="normal-case font-normal">{{ $bautismo->cedula_padre}}</span>
                                </p>
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Cedula Madre:
                                    <span class="normal-case font-normal">{{ $bautismo->cedula_madre}}</span>
                                </p>
                            </div>
                        </div>
                        <div>
                            <h2 class="block text-md text-gray-700 font-bold uppercase mb-2 text-center mt-2">Datos del Libro de Nacimiento</h2>
                            <div class="grid grid-cols-3">
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Libro:
                                    <span class="normal-case font-normal">{{ $bautismo->no_libro}}</span>
                                </p>
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Folio:
                                    <span class="normal-case font-normal">{{ $bautismo->folio}}</span>
                                </p>
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">No. de Declaración:
                                    <span class="normal-case font-normal">{{ $bautismo->no_declaracion}}</span>
                                </p>
                            </div>
                            <div class="grid grid-cols-3">
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Año:
                                    <span class="normal-case font-normal">{{ $bautismo->año}}</span>
                                </p>
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Circunscripción:
                                    <span class="normal-case font-normal">{{ $bautismo->circunscripcion}}</span>
                                </p>
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Oficialía:
                                    <span class="normal-case font-normal">{{ $bautismo->oficialia}}</span>
                                </p>
                            </div>
                        </div>
                        <div>
                            <h2 class="block text-md text-gray-700 font-bold uppercase mb-2 text-center mt-2">Datos de los Padrinos</h2>
                            <div class="grid grid-cols-2">
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Padrino:
                                    <span class="normal-case font-normal">{{ $bautismo->nombre_padrino}}</span>
                                </p>
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Madrina:
                                    <span class="normal-case font-normal">{{ $bautismo->nombre_madrina}}</span>
                                </p>
                            </div>
                        </div>
                        <div>
                            <p class="font-bold text-sm uppercase text-gray-800 my-3">Notas al Margen:
                                <span class="normal-case font-normal">{{ $bautismo->notas}}</span>
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row items-stretch gap-3  mt-5 md:mt-0">
                        <a href="{{ route('menu.bautismos.print', $bautismo->id)}}" class="bg-slate-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center " target="_blank">
                            Imprimir
                        </a>
    
                        <a href="{{ route('menu.bautismos.edit', $bautismo->id)}}" class="bg-blue-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center ">
                            Editar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>