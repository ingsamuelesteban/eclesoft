<div class="bg-gray-100 py-10">
    <h2 class="text-2xl md:text-4xl text-gray-600 text-center font-extrabold my-5">Buscar Estadística
    <div class="max-w-7xl mx-auto">
        <form wire:submit.prevent="leerDatosFormulario">
            
                

                <div class="my-5 w-48 ">
                    <label class="block mb-1 text-sm text-gray-700 uppercase font-bold" for="fecha_nacimiento">Año a buscar</label>
                   
                   <select wire:model="anoBusqueda" id="anoBusqueda" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full" required>
                    <option value="">-- Seleccione --</option>
                                @for ($fechaAntigua; $fechaAntigua <= $fechaReciente; $fechaAntigua++ )
                                <option value="{{ $fechaAntigua}}">{{$fechaAntigua}}</option>
                                @endfor
                     </select>
                  
                </div>
            

            <div class="flex justify-start">
                <input 
                    type="submit"
                    class="bg-indigo-500 hover:bg-indigo-600 transition-colors text-white text-sm font-bold px-10 py-2 rounded cursor-pointer uppercase w-full md:w-auto"
                    value="Buscar"
                />
            </div>
        </form>
    </div>
</div>