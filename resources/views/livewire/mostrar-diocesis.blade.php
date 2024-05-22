<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    @forelse ($diocesis as $diocesi)
    <div class="p-6 bg-white border-b border-gray-200 md:flex md:justify-between md:items-center">
            <div class="space-y-3">
                <a href="#" class="text-xl font-bold">
                    {{ $diocesi->nombre}}
                </a>
                <p class="text-sm text-gray-600 font-bold">Obispo: {{ $diocesi->obispo}}</p>
                @if ($diocesi->titulo==1)
                <p class="text-sm text-gray-600 font-bold">Título: Obispo Titular</p>   
                @elseif ($diocesi->titulo==2)
                <p class="text-sm text-gray-600 font-bold">Título: Administrador Apostólico</p>   
                @else
                <p class="text-sm text-gray-600 font-bold">Título: Administrador Diocesano</p> 
                @endif
                <p class="text-sm text-gray-600 font-bold">Canciller: {{ $diocesi->canciller}}</p>
                <p class="text-sm text-gray-600 font-bold">Vicario General: {{ $diocesi->vicario_general}}</p>
                <p class="text-sm text-gray-600 font-bold">Firma Actual: {{ $diocesi->firma}}</p>
                <p class="text-sm text-gray-600 font-bold">Telefono: {{ $diocesi->telefono}}</p>
                <p class="text-sm text-gray-600 font-bold">RNC: {{ $diocesi->rnc}}</p>
                <p class="text-sm text-gray-600 font-bold">Correo: {{ $diocesi->correo}}</p>
                <p class="text-sm text-gray-600 font-bold">Calle: {{ $diocesi->calle}}</p>
                <p class="text-sm text-gray-600 font-bold">Ciudad: {{ $diocesi->ciudad}}</p>
                <p class="text-sm text-gray-600 font-bold">Provincia: {{ $diocesi->provincia}}</p>
                </div> 
 

            <div class="flex flex-col md:flex-row items-stretch gap-3  mt-5 md:mt-0">
               

                <a href="{{ route('menu.administracion.edit', $diocesi->id)}}" class="bg-blue-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center ">
                    Editar
                </a>

               
            </div>
            @empty
            <p class="p-3 text-center text-sm text-gray-600">No hay registros almacenados...</p>
        
            <div class="flex gap-3  mt-5 md:mt-0 justify-center">
            <a href="{{ route('menu.diocesis.create')}}" class="bg-blue-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center justify-center ">
                Configurar Diócesis
            </a>
            </div>
        </div>
        @endforelse
   
</div>



    