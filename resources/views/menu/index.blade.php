<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Menu Principal') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if (session()->has('mensaje'))
          <div class="uppercase border border-green-600 bg-green-100 text-green-600 font-bold p-2 my-3 text-sm">
            {{ session('mensaje')}} 
        </div>
      @endif
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
        @if (Auth::user()->departamento ==2)
        <h1 class="font-semibold text-xl text-gray-800 leading-tight text-center mb-5">OBISPADO</h1>   
        @else
        <h1 class="font-semibold text-xl text-gray-800 leading-tight text-center mb-5">Oficina Parroquial</h1>  
        @endif
   

    <div class="flex flex-col md:flex-col items-center">
        @if (Auth::user()->departamento ==2)
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