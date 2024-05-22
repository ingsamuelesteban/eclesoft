<x-app-layout>
    @include('menu.matrimonios.navigation');
    @include('menu.decretosm.navigation');
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
                                @if ($decretom->nombre_esposa_civil)
                                <tr>
                                    <th style="width: 30%; border-collapse:collapse; border: 1px solid black" class="uppercase">Nombre de la Esposa</th>
                                    <td  style=" border-collapse:collapse; border: 1px solid black"class="uppercase">{{ $decretom->nombre_esposa}}</td>
                                    <td style=" border-collapse:collapse; border: 1px solid black" class="uppercase">{{$decretom->nombre_esposa_civil}}</td>
                                </tr> 
                                @endif
                                @if ($decretom->cedula_esposa_civil)
                                <tr>
                                    <th style="width: 30%; border-collapse:collapse; border: 1px solid black" class="uppercase">Cédula de la Esposa</th>
                                    <td  style=" border-collapse:collapse; border: 1px solid black"class="uppercase">{{ $decretom->cedula_esposa}}</td>
                                    <td style=" border-collapse:collapse; border: 1px solid black" class="uppercase">{{$decretom->cedula_esposa_civil}}</td>
                                </tr> 
                                @endif
                                @if ($decretom->fecha_nacimiento_esposa_civil)
                                <tr>
                                    <th style="width: 30%; border-collapse:collapse; border: 1px solid black" class="uppercase">fecha de nacimiento de la esposa</th>
                                    <td style=" border-collapse:collapse; border: 1px solid black" class="uppercase">{{Carbon\Carbon::parse($decretom->fecha_nacimiento_esposa)->isoFormat('L')}}</td>
                                    <td  style=" border-collapse:collapse; border: 1px solid black" class="uppercase">{{Carbon\Carbon::parse($decretom->fecha_nacimiento_esposa_civil)->isoFormat('L')}}</td>
                                </tr> 
                                @endif
                                @if ($decretom->lugar_nacimiento_esposa_civil)
                                <tr>
                                    <th style="width: 30%; border-collapse:collapse; border: 1px solid black" class="uppercase">Lugar de Nacimiento de la Esposa</th>
                                    <td  style=" border-collapse:collapse; border: 1px solid black"class="uppercase">{{ $decretom->lugar_nacimiento_esposa}}</td>
                                    <td style=" border-collapse:collapse; border: 1px solid black" class="uppercase">{{$decretom->lugar_nacimiento_esposa_civil}}</td>
                                </tr> 
                                @endif
                                @if ($decretom->nombre_esposo_civil)
                                <tr>
                                    <th style="width: 30%; border-collapse:collapse; border: 1px solid black" class="uppercase">Nombre del Esposo</th>
                                    <td  style=" border-collapse:collapse; border: 1px solid black"class="uppercase">{{ $decretom->nombre_esposo}}</td>
                                    <td style=" border-collapse:collapse; border: 1px solid black" class="uppercase">{{$decretom->nombre_esposo_civil}}</td>
                                </tr> 
                                @endif
                                @if ($decretom->cedula_esposo_civil)
                                <tr>
                                    <th style="width: 30%; border-collapse:collapse; border: 1px solid black" class="uppercase">Cédula del Esposo</th>
                                    <td  style=" border-collapse:collapse; border: 1px solid black"class="uppercase">{{ $decretom->cedula_esposo}}</td>
                                    <td style=" border-collapse:collapse; border: 1px solid black" class="uppercase">{{$decretom->cedula_esposo_civil}}</td>
                                </tr> 
                                @endif
                                @if ($decretom->fecha_nacimiento_esposo_civil)
                                <tr>
                                    <th style="width: 30%; border-collapse:collapse; border: 1px solid black" class="uppercase">fecha de nacimiento del esposo</th>
                                    <td style=" border-collapse:collapse; border: 1px solid black" class="uppercase">{{Carbon\Carbon::parse($decretom->fecha_nacimiento_esposo)->isoFormat('L')}}</td>
                                    <td  style=" border-collapse:collapse; border: 1px solid black" class="uppercase">{{Carbon\Carbon::parse($decretom->fecha_nacimiento_esposo_civil)->isoFormat('L')}}</td>
                                </tr> 
                                @endif

                                @if ($decretom->lugar_nacimiento_esposo_civil)
                                <tr>
                                    <th style="width: 30%; border-collapse:collapse; border: 1px solid black" class="uppercase">Lugar de Nacimiento del Esposo</th>
                                    <td  style=" border-collapse:collapse; border: 1px solid black"class="uppercase">{{ $decretom->lugar_nacimiento_esposo}}</td>
                                    <td style=" border-collapse:collapse; border: 1px solid black" class="uppercase">{{$decretom->lugar_nacimiento_esposo_civil}}</td>
                                </tr> 
                                @endif
                            
                        
                        @if ($decretom->nombre_madre_esposa_civil)
                        <tr>
                            <th style="width: 30%; border-collapse:collapse; border: 1px solid black" class="uppercase">Nombre Madre de la esposa</th>
                            <td  style=" border-collapse:collapse; border: 1px solid black"class="uppercase">{{ $decretom->nombre_madre_esposa}}</td>
                            <td style=" border-collapse:collapse; border: 1px solid black" class="uppercase">{{$decretom->nombre_madre_esposa_civil}}</td>
                        </tr> 
                        @endif
                    @if ($decretom->nombre_padre_esposa_civil)
                    <tr>
                        <th style="width: 30%; border-collapse:collapse; border: 1px solid black" class="uppercase">Nombre Padre de la Esposa</th>
                        <td style=" border-collapse:collapse; border: 1px solid black" class="text-uppercase">{{ $decretom->nombre_padre_esposa}}</td>
                        <td style=" border-collapse:collapse; border: 1px solid black" class="text-uppercase">{{$decretom->nombre_padre_esposa_civil}}</td>
                    </tr> 
                    @endif
                    @if ($decretom->nombre_madre_esposo_civil)
                    <tr>
                        <th style="width: 30%; border-collapse:collapse; border: 1px solid black" class="uppercase">Nombre Madre del esposo</th>
                        <td  style=" border-collapse:collapse; border: 1px solid black"class="uppercase">{{ $decretom->nombre_madre_esposo}}</td>
                        <td style=" border-collapse:collapse; border: 1px solid black" class="uppercase">{{$decretom->nombre_madre_esposo_civil}}</td>
                    </tr> 
                    @endif
                @if ($decretom->nombre_padre_esposo_civil)
                <tr>
                    <th style="width: 30%; border-collapse:collapse; border: 1px solid black" class="uppercase">Nombre Padre del Esposo</th>
                    <td style=" border-collapse:collapse; border: 1px solid black" class="text-uppercase">{{ $decretom->nombre_padre_esposo}}</td>
                    <td style=" border-collapse:collapse; border: 1px solid black" class="text-uppercase">{{$decretom->nombre_padre_esposo_civil}}</td>
                </tr> 
                @endif
                    @if ($decretom->nombre_madrina_civil)
                    <tr>
                        <th style="width: 30%; border-collapse:collapse; border: 1px solid black" class="uppercase">Nombre de la Madrina</th>
                        <td style=" border-collapse:collapse; border: 1px solid black" class="uppercase">{{ $decretom->nombre_madrina}}</td>
                        <td style=" border-collapse:collapse; border: 1px solid black" class="uppercase">{{$decretom->nombre_madrina_civil}}</td>
                    </tr> 
                    @endif
                    @if ($decretom->cedula_madrina_civil)
                    <tr>
                        <th style="width: 30%; border-collapse:collapse; border: 1px solid black" class="uppercase">Cédula de la Madrina</th>
                        <td style=" border-collapse:collapse; border: 1px solid black" class="uppercase">{{ $decretom->cedula_madrina}}</td>
                        <td style=" border-collapse:collapse; border: 1px solid black" class="uppercase">{{$decretom->cedula_madrina_civil}}</td>
                    </tr> 
                    @endif
                    @if ($decretom->nombre_padrino_civil)
                    <tr>
                        <th style="width: 30%; border-collapse:collapse; border: 1px solid black" class="uppercase">Nombre del Padrino</th>
                        <td style=" border-collapse:collapse; border: 1px solid black" class="uppercase">{{ $decretom->nombre_padrino}}</td>
                        <td style=" border-collapse:collapse; border: 1px solid black" class="uppercase">{{$decretom->nombre_padrino_civil}}</td>
                    </tr> 
                    @endif
                    @if ($decretom->cedula_padrino_civil)
                    <tr>
                        <th style="width: 30%; border-collapse:collapse; border: 1px solid black" class="uppercase">Cédula del Padrino</th>
                        <td style=" border-collapse:collapse; border: 1px solid black" class="uppercase">{{ $decretom->cedula_padrino}}</td>
                        <td style=" border-collapse:collapse; border: 1px solid black" class="uppercase">{{$decretom->cedula_padrino_civil}}</td>
                    </tr> 
                    @endif
                    
                            </table>
                           
                    <div class="flex flex-col md:flex-row items-stretch gap-3  mt-5 md:mt-0 p-5">
                        <a href="{{ route('menu.decretosm.print', $decretom->id)}}" class="bg-slate-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center " target="_blank">
                            Imprimir
                        </a>
    
                        <a href="{{ route('menu.decretosm.edit', $decretom->id)}}" class="bg-blue-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center ">
                            Editar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>