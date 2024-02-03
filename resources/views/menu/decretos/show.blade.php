<x-app-layout>
    @include('menu.bautismos.navigation');
    @include('menu.decretos.navigation');
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Confirmar Datos de Solicitud de Decreto') }}
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
                        <div style="align-items: center">
                            <table style="text-align: center; table-layout:fixed; width:100%; border-collapse:collapse; border: 3px solid black;" >
                                <tr>
                                    <th></th>
                                    <th style="width: 30%; border-collapse:collapse; border: 1px solid black">IGLESIA</th>
                                    <th style="width: 30%; border-collapse:collapse; border: 1px solid black">CIVIL</th>
                                </tr>
                                @if ($decreto->nombre_civil)
                                    <tr>
                                        <th style="width: 30%; border-collapse:collapse; border: 1px solid black" class="uppercase">Nombre del bautizado</th>
                                        <td style=" border-collapse:collapse; border: 1px solid black">{{ $decreto->nombre}}</td>
                                        <td style=" border-collapse:collapse; border: 1px solid black" class="uppercase">{{$decreto->nombre_civil}}</td>
                                    </tr> 
                                @endif
                                @if ($decreto->genero_civil)
                                <tr>
                                    <th style="width: 30%; border-collapse:collapse; border: 1px solid black" class="uppercase">Sexo</th>
                                    @if ($decreto->genero==1)
                                    <td style=" border-collapse:collapse; border: 1px solid black" class="uppercase">MASCULINO</td> 
                                    @else
                                    <td style=" border-collapse:collapse; border: 1px solid black" class="uppercase">FEMENINO</td> 
                                    @endif
                    
                                    @if ($decreto->genero_civil==1)
                                    <td style=" border-collapse:collapse; border: 1px solid black" class="uppercase">MASCULINO</td> 
                                    @else
                                    <td style=" border-collapse:collapse; border: 1px solid black" class="uppercase">FEMENINO</td> 
                                    @endif
                                </tr> 
                            @endif
                            @if ($decreto->fecha_nacimiento_civil)
                            <tr>
                                <th style="width: 30%; border-collapse:collapse; border: 1px solid black" class="uppercase">fecha de nacimiento</th>
                                <td style=" border-collapse:collapse; border: 1px solid black" class="uppercase">{{Carbon\Carbon::parse($decreto->fecha_nacimiento)->isoFormat('L')}}</td>
                                <td  style=" border-collapse:collapse; border: 1px solid black" class="uppercase">{{Carbon\Carbon::parse($decreto->fecha_nacimiento_civil)->isoFormat('L')}}</td>
                            </tr> 
                        @endif
                        @if ($decreto->nombre_madre_civil)
                        <tr>
                            <th style="width: 30%; border-collapse:collapse; border: 1px solid black" class="uppercase">Nombre de la Madre</th>
                            <td  style=" border-collapse:collapse; border: 1px solid black"class="uppercase">{{ $decreto->nombre_madre}}</td>
                            <td style=" border-collapse:collapse; border: 1px solid black" class="uppercase">{{$decreto->nombre_madre_civil}}</td>
                        </tr> 
                    @endif
                    @if ($decreto->cedula_madre_civil)
                    <tr>
                        <th style="width: 30%; border-collapse:collapse; border: 1px solid black" class="uppercase">cédula de la madre</th>
                        <td style=" border-collapse:collapse; border: 1px solid black" class="uppercase">{{ $decreto->cedula_madre}}</td>
                        <td style=" border-collapse:collapse; border: 1px solid black" class="uppercase">{{$decreto->cedula_madre_civil}}</td>
                    </tr> 
                    @endif
                    @if ($decreto->nombre_padre_civil)
                    <tr>
                        <th style="width: 30%; border-collapse:collapse; border: 1px solid black" class="uppercase">Nombre del Padre</th>
                        <td style=" border-collapse:collapse; border: 1px solid black" class="text-uppercase">{{ $decreto->nombre_padre}}</td>
                        <td style=" border-collapse:collapse; border: 1px solid black" class="text-uppercase">{{$decreto->nombre_padre_civil}}</td>
                    </tr> 
                    @endif
                    @if ($decreto->cedula_padre_civil)
                    <tr>
                        <th style="width: 30%; border-collapse:collapse; border: 1px solid black" class="uppercase">cédula del padre</th>
                        <td style=" border-collapse:collapse; border: 1px solid black" class="uppercase">{{ $decreto->cedula_padre}}</td>
                        <td style=" border-collapse:collapse; border: 1px solid black" class="uppercase">{{$decreto->cedula_padre_civil}}</td>
                    </tr> 
                    @endif
                    @if ($decreto->nombre_madrina_civil)
                    <tr>
                        <th style="width: 30%; border-collapse:collapse; border: 1px solid black" class="uppercase">Nombre de la Madrina</th>
                        <td style=" border-collapse:collapse; border: 1px solid black" class="uppercase">{{ $decreto->nombre_madrina}}</td>
                        <td style=" border-collapse:collapse; border: 1px solid black" class="uppercase">{{$decreto->nombre_madrina_civil}}</td>
                    </tr> 
                    @endif
                    @if ($decreto->nombre_padrino_civil)
                    <tr>
                        <th style="width: 30%; border-collapse:collapse; border: 1px solid black" class="uppercase">Nombre del Padrino</th>
                        <td style=" border-collapse:collapse; border: 1px solid black" class="uppercase">{{ $decreto->nombre_padrino}}</td>
                        <td style=" border-collapse:collapse; border: 1px solid black" class="uppercase">{{$decreto->nombre_padrino_civil}}</td>
                    </tr> 
                    @endif
                    
                            </table>
                           
                    <div class="flex flex-col md:flex-row items-stretch gap-3  mt-5 md:mt-0 p-5">
                        <a href="{{ route('menu.decretos.print', $decreto->id)}}" class="bg-slate-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center " target="_blank">
                            Imprimir
                        </a>
    
                        <a href="{{ route('menu.decretos.edit', $decreto->id)}}" class="bg-blue-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center ">
                            Editar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>