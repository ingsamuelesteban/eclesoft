<x-app-layout>
    @include('menu.confirmacion.navigation');
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Menú Confirmación') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if (session()->has('mensaje'))
            <div class="uppercase border border-green-600 bg-green-100 text-green-600 font-bold p-2 my-3 text-sm">
              {{ session('mensaje')}} 
          </div>
        @endif
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg " >
                <div class="p-10">
                    <div class="mb-5">
                        <h3 class="font-bold text-3xl text-gray-800 my-3 text-center">
                            {{ $confirmacion->nombre}} {{$confirmacion->apellidos}}
                        </h3>


                        <div>
                            <h2 class="block text-md text-gray-700 font-bold uppercase mb-2 text-center mt-2">Datos Personales</h2>
                            <div class="grid grid-cols-4">
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Nombre:
                                    <span class="normal-case font-normal">{{ $confirmacion->nombre}} </span>
                                </p>
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Apellidos:
                                    <span class="normal-case font-normal"> {{$confirmacion->apellidos}}</span>
                                </p>
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Edad:
                                    <span class="normal-case font-normal"> {{$confirmacion->edad}}</span>
                                </p>
                                @if ($confirmacion->sexo==1)
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Sexo:
                                    <span class="normal-case font-normal"> Masculino </span>
                                </p>
                                @else
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Sexo:
                                    <span class="normal-case font-normal">Femenino</span>
                                </p>
                                @endif
                               
                            </div>
                        </div>
                        <div>
                            <h2 class="block text-md text-gray-700 font-bold uppercase mb-2 text-center mt-2"> Padres y Padrinos</h2>
                            <div class="grid grid-cols-3">
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Padre:
                                    <span class="normal-case font-normal">{{ $confirmacion->nombre_padre}}</span>
                                </p>
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">Madre:
                                    <span class="normal-case font-normal">{{ $confirmacion->nombre_madre}}</span>
                                </p>
                                <p class="font-bold text-sm uppercase text-gray-800 my-3">{{$confirmacion->sexo_padrinos}}:
                                    <span class="normal-case font-normal">{{ $confirmacion->padrinos}}</span>
                                </p>
                            </div>
                            
                        </div>

                        <div>
                            <p class="font-bold text-sm uppercase text-gray-800 my-3">Parroquia:
                                <span class="normal-case font-normal">{{ $confirmacion->parroquia->parroquia}}</span>
                            </p>
                        </div>
                        <div>
                            <p class="font-bold text-sm uppercase text-gray-800 my-3">Notas al Margen:
                                <span class="normal-case font-normal">{{ $confirmacion->notas}}</span>
                            </p>
                        </div>
                    </div>

                   
                    
                    <div class="flex flex-col md:flex-row items-stretch gap-3  mt-5 md:mt-0">
                        <a href="{{ route('menu.confirmacion.print', $confirmacion->id)}}" class="bg-slate-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center " target="_blank">
                            Imprimir
                        </a>
    
                        <a href="{{ route('menu.confirmacion.edit', $confirmacion->id)}}" class="bg-blue-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center ">
                            Editar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>