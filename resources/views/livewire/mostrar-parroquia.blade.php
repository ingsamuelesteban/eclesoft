<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    @forelse ($parroquia as $parroquia)
    <div class="p-6 bg-white border-b border-gray-200 md:flex md:justify-between md:items-center">
            <div class="space-y-3">
                <a href="#" class="text-xl font-bold">
                    {{ $parroquia->parroquia}}
                </a>
                <p class="text-sm text-gray-600 font-bold">Parroco: {{ $parroquia->parroco}}</p>
                <p class="text-sm text-gray-600 font-bold">Vicario: {{ $parroquia->vicario}}</p>
                <p class="text-sm text-gray-600 font-bold">Diocesis: {{ $parroquia->diocesis}}</p>
                <p class="text-sm text-gray-600 font-bold">Obispo: {{ $parroquia->obispo}}</p>
                <p class="text-sm text-gray-600 font-bold">Telefono: {{ $parroquia->telefonop}}</p>
                <p class="text-sm text-gray-600 font-bold">RNC: {{ $parroquia->rnc}}</p>
                <p class="text-sm text-gray-600 font-bold">Correo: {{ $parroquia->correo}}</p>
                <p class="text-sm text-gray-600 font-bold">Calle: {{ $parroquia->calle}}</p>
                <p class="text-sm text-gray-600 font-bold">Ciudad: {{ $parroquia->ciudad}}</p>
                <p class="text-sm text-gray-600 font-bold">Provincia: {{ $parroquia->provincia}}</p>
                <p class="text-sm text-gray-600 font-bold">Circunscripción: {{ $parroquia->circunscripcion}}</p>
                <p class="text-sm text-gray-600 font-bold">Color del borde del timbrado: <input type="color" value= {{$parroquia->color_borde}} disabled></p>
            </div> 
 

            <div class="flex flex-col md:flex-row items-stretch gap-3  mt-5 md:mt-0">
               

                <a href="{{ route('menu.administracion.edit', $parroquia->id)}}" class="bg-blue-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center ">
                    Editar
                </a>

               
            </div>
            @empty
            <p class="p-3 text-center text-sm text-gray-600">No hay registros almacenados...</p>
        
            <div class="flex gap-3  mt-5 md:mt-0 justify-center">
            <a href="{{ route('menu.administracion.create')}}" class="bg-blue-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center justify-center ">
                Configurar mi Parroquia
            </a>
            </div>
        </div>
        @endforelse
   
</div>



    