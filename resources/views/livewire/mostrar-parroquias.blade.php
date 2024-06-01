<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    @forelse ($parroquias as $parroquia)
    <div class="p-6 bg-white border-b border-gray-200 md:flex md:justify-between md:items-center">
            <div class="space-y-3">
                <a href="#" class="text-xl font-bold">
                    {{ $parroquia->parroquia}}
                </a>
                <p class="text-sm text-gray-600 font-bold">Párroco: {{ $parroquia->parroco}}</p>
                <p class="text-sm text-gray-600 font-bold">Vicario: {{ $parroquia->vicario}}</p>
                <p class="text-sm text-gray-600 font-bold">Dirección: {{ $parroquia->calle}}, {{$parroquia->ciudad}}, {{$parroquia->provincia}}</p>
                <p class="text-sm text-gray-600 font-bold">Teléfono: {{ $parroquia->telefono}}</p>
                <p class="text-sm text-gray-600 font-bold">RNC: {{ $parroquia->rnc}}</p>
            </div> 

            <div class="flex flex-col md:flex-row items-stretch gap-3  mt-5 md:mt-0">

                <a href="#" class="bg-blue-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center ">
                    Editar
                </a>

                <a href="#" class="bg-red-600 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center ">
                    Eliminar
                </a>
            </div>
    </div>
    @empty
    <p class="p-3 text-center text-sm text-gray-600">No hay registros almacenados...</p>
    @endforelse
</div>


<div class="mt-10">
    {{ $parroquias->links() }}
</div>
