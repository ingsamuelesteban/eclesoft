
<form class="md:w-full space-y-5" wire:submit.prevent='crearConfirmacion'>
    <h2 class="block text-md text-gray-700 font-bold uppercase mb-2 text-center mt-2">Datos del libro de Confirmación</h2>

    <div class="grid grid-cols-3">
        <div>
            <x-input-label for="libro_confirmacion" :value="__('No. Libro')" />

            <x-text-input id="libro_confirmacion" class="block mt-1 w-full" type="text" 
            wire:model="libro_confirmacion" 
            :value="old('libro_confirmacion')" placeholder="No. Libro" autofocus/>

            @error('libro_confirmacion')
            <livewire:mostrar-alertas :message="$message" />
        @enderror

        </div>

        <div>
            <x-input-label for="folio_confirmacion" :value="__('folio')" />

            <x-text-input id="folio_confirmacion" class="block mt-1 w-full" type="text" 
            wire:model="folio_confirmacion" 
            :value="old('folio_confirmacion')" placeholder="Folio o Pág"/>
            @error('folio_confirmacion')
            <livewire:mostrar-alertas :message="$message" />
        @enderror
        </div>
        
        <div>


            <x-input-label for="no_confirmacion" :value="__('No. #')" />

            <x-text-input id="no_confirmacion" class="block mt-1 w-full" type="text" wire:model="no_confirmacion" :value="old('no_confirmacion')" placeholder="No. de Acta"/>

            @error('no_confirmacion')
            <livewire:mostrar-alertas :message="$message" />
        @enderror
        </div>
    </div>

    <h2 class="block text-md text-gray-700 font-bold uppercase mb-2 text-center mt-2">datos de la celebración</h2>

    <div class="grid grid-cols-3">

        <div>
            <x-input-label for="celebrante" :value="__('conferidas por.:')" />
    
            <x-text-input id="celebrante" class="block mt-1 w-full" type="text" wire:model="celebrante" :value="old('celebrante')" placeholder="Ej. Rev. P. Juan Perez"/>
    
            @error('celebrante')
            <livewire:mostrar-alertas :message="$message" />
        @enderror
        </div>
         <div>
            <x-input-label for="parroquia_id" :value="__('Parroquia')" />

            <select wire:model="parroquia_id" id="parroquia_id" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full">
            <option value="">-- Seleccione --</option>
                @foreach ($parroquias as $parroquia)
                    <option value="{{$parroquia->id}}">{{$parroquia->parroquia}}</option>
                @endforeach
            </select>
             
            @error('parroquia_id')
            <livewire:mostrar-alertas :message="$message" />
        @enderror

        </div>
 
       



        <div>
            <x-input-label for="fecha_celebracion" :value="__('Fecha')" />
    
            <x-text-input id="fecha_celebracion" class="block mt-1 w-full" type="date" wire:model="fecha_celebracion" :value="old('fecha_celebracion')" />

            @error('fecha_celebracion')
            <livewire:mostrar-alertas :message="$message" />
        @enderror
    
        </div>

    </div>


    <h2 class="block text-md text-gray-700 font-bold uppercase mb-2 text-center">datos del confirmado</h2>


    <div class="grid grid-cols-3">
    <div>

        <x-input-label for="nombre" :value="__('Nombre(S)')" />

        <x-text-input id="nombre" class="block mt-1 w-full" type="text" 
        wire:model="nombre" 
        :value="old('nombre')" placeholder="Primer y Segundo Nombre"
        maxlength="20"/>

        @error('nombre')
            <livewire:mostrar-alertas :message="$message" />
        @enderror

    </div>

    <div>

        <x-input-label for="apellidos" :value="__('Apellidos')" />

        <x-text-input id="apellidos" class="block mt-1 w-full" type="text" 
        wire:model="apellidos" 
        :value="old('apellidos')" placeholder="Primer y Segundo Apellido"
        maxlength="20"/>

        @error('apellidos')
            <livewire:mostrar-alertas :message="$message" />
        @enderror

    </div>
    <div>

        <x-input-label for="edad" :value="__('Edad')" />

        <x-text-input id="edad" class="block mt-1 w-full" type="text" 
        wire:model="edad" 
        :value="old('edad')" placeholder="Edad"
        maxlength="20"/>

        @error('edad')
            <livewire:mostrar-alertas :message="$message" />
        @enderror

    </div>
</div>



<x-input-label for="padres" :value="__('Datos de los Padres')" />

    <div class="grid grid-cols-2">

        <div>
            <x-text-input id="nombre_padre" class="block mt-1 w-full" type="text" wire:model="nombre_padre" :value="old('nombre_padre')" placeholder="Nombre del Padre"/>

            @error('nombre_padre')
                <livewire:mostrar-alertas :message="$message" />
            @enderror

        </div>
        
        <div >
            <x-text-input id="padres" class="block mt-1 w-full" type="text" wire:model="nombre_madre" :value="old('nombre_madre')" placeholder="Nombre de la Madre"/>

            @error('nombre_madre')
                <livewire:mostrar-alertas :message="$message" />
            @enderror
        </div>
    </div>

    
    

        <div>
            <x-input-label for="padrinos" :value="__('Datos de los padrinos')" />

        </div>
            <div >
                <div>
                <x-text-input id="padrinos" class="block mt-1 w-full" type="text" wire:model="padrinos" :value="old('padrinos')" placeholder="Padrino o Madrina segun corresponda."/>

                @error('padrinos')
                <livewire:mostrar-alertas :message="$message" />
            @enderror
            </div>

        </div>

    <div>
        <x-input-label for="notas" :value="__('notas al margen')" />

        <textarea class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" wire:model="notas" id="notas" cols="30" rows="4"  :value="old('notas')">--Sin Notas al margen...--</textarea>

    </div>

    <x-primary-button class="w-full justify-center">
        {{ __('Guardar') }}
    </x-primary-button>
    

</form>
