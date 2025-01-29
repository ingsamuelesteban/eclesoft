<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Menu Principal') }}
        </h2>
    </x-slot>

    
    


    <div class="mt-4 ">
        <h6 class="text-gray-700 text-lg font-bold ml-16 mb-2 ">Estadísticas del Año</h6>
        <div class="flex flex-col md:flex-row -mx-6">
            <div class=" w-full px-6 sm:w-1/2 xl:w-1/3">
                
                <div class="flex  items-center px-5 py-4 shadow-sm rounded-md bg-white">
                    <div class="p-3 rounded-full ">
                        <svg class="h-8 w-8 text-indigo-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <line x1="3" y1="21" x2="21" y2="21" />  <path d="M10 21v-4a2 2 0 0 1 4 0v4" />  <line x1="10" y1="5" x2="14" y2="5" />  <line x1="12" y1="3" x2="12" y2="8" />  <path d="M6 21v-7m-2 2l8 -8l8 8m-2 -2v7" /></svg>
                    </div>

                    <div class="mx-5">
                        <h4 class="text-2xl font-semibold text-gray- text-center">{{$bautismosDelAno}}</h4>
                        <div class="text-gray-500">Bautismos</div>
                    </div>
                </div>
            </div>

            <div class="w-full  px-6 sm:w-1/2 xl:w-1/3 sm:mt-0">
                <div class="flex items-center px-5 py-4 shadow-sm rounded-md bg-white">
                    <div class="p-3 rounded-full ">
                        <svg class="h-8 w-8 text-indigo-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="7" cy="5" r="2" />  <path d="M5 22v-5l-1-1v-4a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4l-1 1v5" />  <circle cx="17" cy="5" r="2" />  <path d="M15 22v-4h-2l2 -6a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1l2 6h-2v4" /></svg>
                    </div>

                    <div class="mx-5">
                        <h4 class="text-2xl font-semibold text-gray-700 text-center">{{$matrimoniosDelAno}}</h4>
                        <div class="text-gray-500">Matrimonios</div>
                    </div>
                </div>
            </div>

           {{--  <div class="w-full mt-6 px-6 sm:w-1/2 xl:w-1/3 xl:mt-0">
                <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white">
                    <div class="p-3 rounded-full bg-pink-600 bg-opacity-75">
                        <svg class="h-8 w-8 text-white" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.99998 11.2H21L22.4 23.8H5.59998L6.99998 11.2Z" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                            <path d="M9.79999 8.4C9.79999 6.08041 11.6804 4.2 14 4.2C16.3196 4.2 18.2 6.08041 18.2 8.4V12.6C18.2 14.9197 16.3196 16.8 14 16.8C11.6804 16.8 9.79999 14.9197 9.79999 12.6V8.4Z" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>

                    <div class="mx-5">
                        <h4 class="text-2xl font-semibold text-gray-700">215,542</h4>
                        <div class="text-gray-500">Available Products</div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if (session()->has('mensaje'))
          <div class="uppercase border border-green-600 bg-green-100 text-green-600 font-bold p-2 my-3 text-sm">
            {{ session('mensaje')}} 
        </div>
      @endif
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
        @if (Auth::user()->departamento ==1)
        <h1 class="font-semibold text-xl text-gray-800 leading-tight text-center mb-5">OBISPADO</h1>   
        @else
        
        <h1 class="font-semibold text-xl text-gray-800 leading-tight text-center mb-5">Oficina Parroquial</h1>  
        @endif
   

    <div class="flex flex-col md:flex-col items-center">
        @if (Auth::user()->departamento ==1)
            @forelse ($diocesis as $diocesi)

            <h2 class="font-semibold text-xl text-gray-700 leading-tight text-center uppercase">{{$diocesi->nombre}}</h2>

            
            <div class="my-5 w-56 flex content-center">
                    <img src="{{ global_asset('storage/img/' .  $diocesi->logo)}}" alt="Logo de la Diócesis">
                </div>
            @empty
            <p class="font-semibold text-base text-red-700 text-center">Antes de comenzar dirijase al apartado de administracion para configurar su Diócesis.
            @endforelse
        @else
            @forelse ($parroquia as $parroquia)

            <h2 class="font-semibold text-xl text-gray-700 leading-tight text-center uppercase">{{$parroquia->parroquia}}</h2>
            
            <div class="my-5 w-56 flex content-center">
                    <img src="{{ global_asset('storage/img/' .  $parroquia->logo)}}" alt="Logo de la Parroquia">
                </div>
            @empty
            <p class="font-semibold text-base text-red-700 text-center">Antes de comenzar dirijase al apartado de administracion para configurar su parroquia.
            @endforelse
        @endif

    </div>
                            
</div>
</div>
</div>
</div>
</x-app-layout>