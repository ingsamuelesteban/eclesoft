<div class="bg-gray-100 py-10">
    <h2 class="text-2xl md:text-4xl text-gray-600 text-center font-extrabold my-5">Buscar y Filtrar Acta de Matrimonio</h2>

    <div class="max-w-7xl mx-auto">
        <form wire:submit.prevent="leerDatosFormulario">
            <div class="md:grid md:grid-cols-5 gap-5">
                <div class="mb-5">
                    <label 
                        class="block mb-1 text-sm text-gray-700 uppercase font-bold "
                        for="nombre_esposo">Nombre Esposo
                    </label>
                    <input 
                        id="nombre_esposo"
                        type="text"
                        placeholder="Buscar por nombre esposo"
                        class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
                        wire:model="nombre_esposo"
                        autofocus
                    />
                </div>

                <div class="mb-5">
                    <label 
                        class="block mb-1 text-sm text-gray-700 uppercase font-bold "
                        for="nombre_esposa">Nombre Esposa
                    </label>
                    <input 
                        id="nombre_esposa"
                        type="text"
                        placeholder="Buscar por nombre esposa"
                        class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
                        wire:model="nombre_esposa"
                    />
                </div>

                <div class="mb-5">
                    <label class="block mb-1 text-sm text-gray-700 uppercase font-bold" for="documento_esposo">Documento Esposo</label>
                    <input 
                        id="documento_esposo"
                        type="text"
                        placeholder="Documento de identidad"
                        class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
                        wire:model="documento_esposo"
                    />
                </div>

                <div class="mb-5">
                    <label class="block mb-1 text-sm text-gray-700 uppercase font-bold" for="documento_esposa">Documento Esposa</label>
                    <input 
                        id="documento_esposa"
                        type="text"
                        placeholder="Documento de identidad"
                        class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
                        wire:model="documento_esposa"
                    />
                </div>

                <div class="mb-5">
                    <label class="block mb-1 text-sm text-gray-700 uppercase font-bold" for="fecha_celebracion">Fecha de la Celebración</label>
                    <input 
                    id="fecha_celebracion"
                    type="date"
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
                    wire:model="fecha_celebracion"
                />
                </div>
            </div>

            <div class="flex justify-end">
                <input 
                    type="submit"
                    class="bg-indigo-500 hover:bg-indigo-600 transition-colors text-white text-sm font-bold px-10 py-2 rounded cursor-pointer uppercase w-full md:w-auto"
                    value="Buscar"
                />
            </div>
        </form>
    </div>
</div>