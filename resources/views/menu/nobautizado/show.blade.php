<x-app-layout>
    @include('menu.nobautizado.navigation');
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Confirmar Datos de Acta de No Bautizado') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg " >
                <div class="p-10">
                    <div class="mb-5">
                        <h3 class="font-bold text-3xl text-gray-800 my-3 text-center">
                            {{ $noBautizado->nombre}}
                        </h3>


                        <div>
                            <h2 class="block text-md text-gray-700 font-bold uppercase mb-2 text-center mt-2">Datos Personales</h2>
                            <div class="grid grid-cols-3">
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Nombre:
                                    <span class="normal-case font-normal">{{ $noBautizado->nombre}}</span>
                                </p>
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Genero:
                                    <span class="normal-case font-normal">       
                                        @if ($noBautizado->genero==1)
                                        Masculino
                                     @else
                                      Femenino   
                                     @endif
                                    </span>
                                </p>

                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Fecha de Nacimiento:
                                    <span class="normal-case font-normal">{{ \Carbon\Carbon::parse($noBautizado->fecha_nacimiento)->isoFormat('LL')}}</span>
                                </p>
                            </div>
                        </div>
                        <div>
                            <h2 class="block text-md text-gray-700 font-bold uppercase mb-2 text-center mt-2">Datos de los Padres</h2>
                            <div class="grid grid-cols-2">
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Padre:
                                    <span class="normal-case font-normal">{{ $noBautizado->nombre_padre}}</span>
                                </p>
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Madre:
                                    <span class="normal-case font-normal">{{ $noBautizado->nombre_madre}}</span>
                                </p>
                            </div>
                            <div class="grid grid-cols-2">
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Cedula Padre:
                                    <span class="normal-case font-normal">{{ $noBautizado->cedula_padre}}</span>
                                </p>
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Cedula Madre:
                                    <span class="normal-case font-normal">{{ $noBautizado->cedula_madre}}</span>
                                </p>
                            </div>
                        </div>

                        <div>
                            <p class="font-bold text-sm uppercase text-gray-800 my-3">Notas al Margen:
                                <span class="normal-case font-normal">{{ $noBautizado->notas}}</span>
                            </p>
                        </div>
                    </div>

                    <div class=" border-dashed border-2 border-indigo-200 ... text-center my-5">
                        <h2 class="block text-md text-gray-700 font-bold uppercase mb-2 text-center mt-2">Documentos Cargados</h2>
                        <div class="grid grid-cols-4">   
                        <div class="my-2">
                            @if ($noBautizado->hospital)
                            <a href="{{global_asset('storage/img/' . $noBautizado->hospital)}}"
                            target="_blank"
                             class="bg-blue-400 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center"
                            >
                                Descargar Doc. Hospital o Alcalde
                            </a>
                            @else
                            <a href="#"
                                 class="bg-gray-400 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center"
                                >
                                Descargar Doc. Hospital o Alcalde
                                </a>
                            @endif
                            </div>
                          
                            <div class="my-2">
                                @if ($noBautizado->escuela)
                                <a href="{{global_asset('storage/img/' . $noBautizado->escuela)}}"
                                target="_blank"
                                 class="bg-blue-400 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center"
                                >
                                    Descargar Doc. de la Escuela
                                </a>
                                @else
                                <a href="#"
                                     class="bg-gray-400 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center"
                                    >
                                        Descargar Doc. de la Escuela
                                    </a>
                            @endif
                            </div>
                            <div class="my-2">
                                @if ($noBautizado->docpadre)
                                <a href="{{global_asset('storage/img/' . $noBautizado->docpadre)}}"
                                target="_blank"
                                 class="bg-blue-400 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center"
                                >
                                    Descargar Cedula del Padre
                                </a>
                                @else
                                <a href="#"
                                     class="bg-gray-400 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center"
                                    >
                                        Descargar Cedula del Padre
                                    </a>
                            @endif
                            </div>
                            <div class="my-2">
                                @if ($noBautizado->docmadre)
                                <a href="{{global_asset('storage/img/' . $noBautizado->docmadre)}}"
                                target="_blank"
                                 class="bg-blue-400 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center"
                                >
                                    Descargar Cedula de la Madre
                                </a>
                                @else
                                <a href="#"
                                     class="bg-gray-400 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center"
                                    >
                                        Descargar Cedula de la Madre
                                    </a>
                            @endif
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex flex-col md:flex-row items-stretch gap-3  mt-5 md:mt-0">
                        <a href="{{ route('menu.nobautizado.print', $noBautizado->id)}}" class="bg-slate-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center " target="_blank">
                            Imprimir
                        </a>
    
                        <a href="{{ route('menu.nobautizado.edit', $noBautizado->id)}}" class="bg-blue-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center ">
                            Editar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>