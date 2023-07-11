<form class="md:w-full space-y-5" wire:submit.prevent='crearMatrimonio'>
    <h2 class="block text-md text-gray-700 font-bold uppercase mb-2 text-center mt-2">Datos del libro de Matrimonio</h2>

    <div class="grid grid-cols-3">
        <div>
            <x-input-label for="libro_matrimonio" :value="__('No. Libro')" />

            <x-text-input id="libro_matrimonio" class="block mt-1 w-full" type="text" 
            wire:model="libro_matrimonio" 
            :value="old('libro_matrimonio')" placeholder="No. Libro" autofocus/>

            @error('libro_matrimonio')
            <livewire:mostrar-alertas :message="$message" />
        @enderror

        </div>

        <div>
            <x-input-label for="folio_matrimonio" :value="__('folio')" />

            <x-text-input id="folio_matrimonio" class="block mt-1 w-full" type="text" 
            wire:model="folio_matrimonio" 
            :value="old('folio_matrimonio')" placeholder="Folio"/>
            @error('folio_matrimonio')
            <livewire:mostrar-alertas :message="$message" />
        @enderror
        </div>
        
        <div>


            <x-input-label for="no_matrimonio" :value="__('No. de Acta')" />

            <x-text-input id="no_matrimonio" 
            class="block mt-1 w-full" 
            type="text" 
            wire:model="no_matrimonio" 
            :value="old('no_matrimonio')" 
            placeholder="No. de Acta"/>

            @error('no_matrimonio')
            <livewire:mostrar-alertas :message="$message" />
        @enderror
        </div>
    </div>

    <h2 class="block text-md text-gray-700 font-bold uppercase mb-2 text-center mt-2">datos de la celebración</h2>

    <div class="grid grid-cols-2">

        <div>
            <x-input-label for="fecha_celebracion" :value="__('Fecha')" />
    
            <x-text-input id="fecha_celebracion" class="block mt-1 w-full" type="date" wire:model="fecha_celebracion" :value="old('fecha_celebracion')" />

            @error('fecha_celebracion')
            <livewire:mostrar-alertas :message="$message" />
        @enderror
    
        </div>

        <div>
            <x-input-label for="celebrante_name" :value="__('celebrante')" />
    
            <x-text-input id="celebrante_name" class="block mt-1 w-full" type="text" wire:model="celebrante_name" :value="old('celebrante_name')" placeholder="Ej. Rev. P. Juan Perez"/>
    
            @error('celebrante_name')
            <livewire:mostrar-alertas :message="$message" />
        @enderror
        </div>
    </div>

    <h2 class="block text-md text-gray-700 font-bold uppercase mb-2 text-center mt-2">datos de los esposos</h2>

    
        <x-input-label for="nombre_esposo" :value="__('Esposo')" />

    <div class="grid grid-cols-2">
        <div >
           

            <x-text-input id="nombre_esposo" class="block mt-1 w-full" type="text" wire:model="nombre_esposo" :value="old('nombre_esposo')" placeholder="Nombre del Esposo"/>

            @error('nombre_esposo')
                <livewire:mostrar-alertas :message="$message" />
            @enderror

        </div>

        <div>

            <x-text-input id="documento_esposo" class="block mt-1 w-full" type="text" wire:model="documento_esposo" :value="old('documento_esposo')" placeholder="Cédula o Pasaporte con guiones"/>

            @error('documento_esposo')
                <livewire:mostrar-alertas :message="$message" />
            @enderror

        </div>

    </div>

    <x-input-label for="nombre_esposa" :value="__('Esposa')" />

        <div class="grid grid-cols-2">

                <div>
                <x-text-input id="nombre_esposa" class="block mt-1 w-full" type="text" wire:model="nombre_esposa" :value="old('nombre_esposa')" placeholder="Nombre de la Esposa"/>

                @error('nombre_esposa')
                    <livewire:mostrar-alertas :message="$message" />
                @enderror

            </div>
            <div>
                <x-text-input id="documento_esposa" class="block mt-1 w-full" type="text" wire:model="documento_esposa" :value="old('documento_esposa')" placeholder="Cédula o Pasaporte con guiones"/>


                @error('documento_esposa')
                <livewire:mostrar-alertas :message="$message" />
            @enderror

            </div>
           
        </div>

        <h2 class="block text-md text-gray-700 font-bold uppercase mb-2 text-center mt-2">datos de los testigos</h2>

    
        <x-input-label for="nombre_padrino" :value="__('Padrino')" />

    <div class="grid grid-cols-2">
        <div >
    
            <x-text-input id="nombre_padrino" class="block mt-1 w-full" type="text" wire:model="nombre_padrino" :value="old('nombre_padrino')" placeholder="Nombre del Padrino"/>

            @error('nombre_padrino')
                <livewire:mostrar-alertas :message="$message" />
            @enderror

        </div>

        <div>

            <x-text-input id="documento_padrino" class="block mt-1 w-full" type="text" wire:model="documento_padrino" :value="old('documento_padrino')" placeholder="Cédula o Pasaporte con guiones"/>

            @error('documento_padrino')
                <livewire:mostrar-alertas :message="$message" />
            @enderror

        </div>

    </div>

    <x-input-label for="nombre_madrina" :value="__('Madrina')" />

        <div class="grid grid-cols-2">

                <div>
                <x-text-input id="nombre_madrina" class="block mt-1 w-full" type="text" wire:model="nombre_madrina" :value="old('nombre_madrina')" placeholder="Nombre de la Madrina"/>

                @error('nombre_madrina')
                    <livewire:mostrar-alertas :message="$message" />
                @enderror

            </div>
            <div>
                <x-text-input id="documento_madrina" class="block mt-1 w-full" type="text" wire:model="documento_madrina" :value="old('documento_madrina')" placeholder="Cédula o Pasaporte con guiones"/>


                @error('documento_madrina')
                <livewire:mostrar-alertas :message="$message" />
            @enderror

            </div>
           
        </div>


    <h2 class="block text-md text-gray-700 font-bold uppercase mb-2 text-center mt-2">Transcripción a los Registros del Estado Civil</h2>

    <div class="grid grid-cols-4">

        <div>
            <x-input-label for="fecha_transcripcion" :value="__('Fecha')" />
    
            <x-text-input id="fecha_transcripcion" class="block mt-1 w-full" type="date" wire:model="fecha_transcripcion" :value="old('fecha_transcripcion')" />

            @error('fecha_transcripcion')
            <livewire:mostrar-alertas :message="$message" />
        @enderror
    
        </div>

        <div>
            <x-input-label for="no_libro" :value="__('Libro')" />

            <x-text-input id="no_libro" class="block mt-1 w-full" type="text" 
            wire:model="no_libro" 
            :value="old('no_libro')" placeholder="No. Libro"/>

            @error('no_libro')
            <livewire:mostrar-alertas :message="$message" />
        @enderror

        </div>

        <div>
            <x-input-label for="folio" :value="__('folio')" />

            <x-text-input id="folio" class="block mt-1 w-full" type="text" 
            wire:model="folio" 
            :value="old('folio')" placeholder="Folio"/>
            @error('folio')
            <livewire:mostrar-alertas :message="$message" />
        @enderror
        </div>
        
        <div>


            <x-input-label for="no_transcripcion" :value="__('No. de Acta')" />

            <x-text-input id="no_transcripcion" class="block mt-1 w-full" type="text" wire:model="no_transcripcion" :value="old('no_transcripcion')" placeholder="No. Acta"/>

            @error('no_transcripcion')
            <livewire:mostrar-alertas :message="$message" />
        @enderror
        </div>


    </div>

    <div>
        <x-input-label for="notas" :value="__('notas al margen')" />

        <textarea class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" wire:model="notas" id="notas" cols="30" rows="4" :value="old('notas')">...</textarea>

    </div>


    <x-primary-button class="w-full justify-center">
        {{ __('Guardar') }}
    </x-primary-button>
    

</form>