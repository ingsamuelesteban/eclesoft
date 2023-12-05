<div class="bg-gray-100 py-10">
    <h2 class="text-2xl md:text-4xl text-gray-600 text-center font-extrabold my-5">Buscar y Filtrar Acta de No Bautizado</h2>

    <div class="max-w-7xl mx-auto">
        <form wire:submit.prevent="leerDatosFormulario">
            <div class="md:grid md:grid-cols-5 gap-5">
                <div class="mb-5">
                    <label 
                        class="block mb-1 text-sm text-gray-700 uppercase font-bold "
                        for="nombre">Nombre
                    </label>
                    <input 
                        id="nombre"
                        type="text"
                        placeholder="Nombre Completo o Parcial"
                        class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
                        wire:model="nombre"
                        autofocus
                    />
                </div>

                <div class="mb-5">
                    <label 
                        class="block mb-1 text-sm text-gray-700 uppercase font-bold "
                        for="nombre_madre">Nombre Madre
                    </label>
                    <input 
                        id="nombre_madre"
                        type="text"
                        placeholder="Nombre Completo o Parcial"
                        class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
                        wire:model="nombre_madre"
                    />
                </div>

                <div class="mb-5">
                    <label class="block mb-1 text-sm text-gray-700 uppercase font-bold" for="cedula_madre">Cédula Madre</label>
                    <input 
                        id="cedula_madre"
                        type="text"
                        placeholder="Cédula con Guiones"
                        class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
                        wire:model="cedula_madre"
                    />
                </div>

                <div class="mb-5">
                    <label class="block mb-1 text-sm text-gray-700 uppercase font-bold" for="nombre_padre">Nombre Padre</label>
                    <input 
                        id="nombre_padre"
                        type="text"
                        placeholder="Nombre completo o Parcial"
                        class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
                        wire:model="nombre_padre"
                    />
                </div>

                <div class="mb-5">
                    <label class="block mb-1 text-sm text-gray-700 uppercase font-bold" for="cedula_padre">Cédula Padre</label>
                    <input 
                        id="cedula_padre"
                        type="text"
                        placeholder="Cédula con Guiones"
                        class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
                        wire:model="cedula_padre"
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