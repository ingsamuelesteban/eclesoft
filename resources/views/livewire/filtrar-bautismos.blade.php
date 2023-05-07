<div class="bg-gray-100 py-10">
    <h2 class="text-2xl md:text-4xl text-gray-600 text-center font-extrabold my-5">Buscar y Filtrar Acta de Bautismo</h2>

    <div class="max-w-7xl mx-auto">
        <form wire:submit.prevent="leerDatosFormulario">
            <div class="md:grid md:grid-cols-4 gap-5">
                <div class="mb-5">
                    <label 
                        class="block mb-1 text-sm text-gray-700 uppercase font-bold "
                        for="nombre">Nombre Bautizado
                    </label>
                    <input 
                        id="nombre"
                        type="text"
                        placeholder="Buscar por nombre"
                        class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
                        wire:model="nombre"
                    />
                </div>

                <div class="mb-5">
                    <label class="block mb-1 text-sm text-gray-700 uppercase font-bold" for="cedula_madre">Cedula Madre</label>
                    <input 
                        id="cedula_madre"
                        type="text"
                        placeholder="Cedula con guiones"
                        class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
                        wire:model="cedulaMadre"
                    />
                </div>

                <div class="mb-5">
                    <label class="block mb-1 text-sm text-gray-700 uppercase font-bold" for="cedula_padre">Cedula del Padre</label>
                    <input 
                    id="cedula_padre"
                    type="text"
                    placeholder="Cedula con guiones"
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
                    wire:model="cedulaPadre"
                />
                </div>

                <div class="mb-5">
                    <label class="block mb-1 text-sm text-gray-700 uppercase font-bold" for="cedula_padre">Fecha de Nacimiento</label>
                    <input 
                    id="fecha_nacimiento"
                    type="date"
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
                    wire:model="fechaNacimiento"
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