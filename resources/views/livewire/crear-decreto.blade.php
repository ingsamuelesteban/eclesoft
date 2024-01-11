<form class="md:w-full space-y-5" wire:submit.prevent='guardarDecreto'>

    <h2 class="block text-md text-gray-700 font-bold uppercase  text-center mt-2">solicitud de decreto</h2>

    <p class="text-center">Favor solo completar los datos que desea corregir.</p>


    <h2 class="block text-md text-gray-700 font-bold uppercase mb-2 text-center">datos del bautizado</h2>

    <div class="grid grid-cols-2">
        <div>
            <h3 class="block text-md text-gray-700 font-bold uppercase mb-2 text-center">IGLESIA</h3>
        </div>
        <div>
            <h3 class="block text-md text-gray-700 font-bold uppercase mb-2 text-center">CIVIL</h3>
        </div>
    </div>

    <div class="grid grid-cols-2">
    <div>

        <x-input-label for="nombre" :value="__('Nombre')" />

        

        <x-text-input id="nombre" class="block mt-1 w-full" type="text" 
        wire:model="nombre" 
        :value="old('nombre')" placeholder="Primer y segundo nombre" />

        @error('nombre')
            <livewire:mostrar-alertas :message="$message" />
        @enderror

    </div>

    <div>

        <x-input-label for="nombre_civil" :value="__('Nombre')" />

        

        <x-text-input id="nombre_civil" class="block mt-1 w-full" type="text" 
        wire:model="nombre_civil" 
        :value="old('nombre_civil')" placeholder="Primer y segundo nombre"/>

        @error('nombre_civil')
            <livewire:mostrar-alertas :message="$message" />
        @enderror

    </div>
</div>

<div class="grid grid-cols-2">
    <div>
        <x-input-label for="genero" :value="__('Genero')" />

        <select wire:model="genero" id="genero" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full">
            <option value="">Seleccione</option>
            <option value="1">Masculino</option>
            <option value="2">Femenino</option>
        </select>
        @error('genero')
            <livewire:mostrar-alertas :message="$message" />
        @enderror
    </div>

    <div>
        <x-input-label for="genero_civil" :value="__('Genero')" />

        <select wire:model="genero_civil" id="genero_civil" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full">
            <option value="">Seleccione</option>
            <option value="1">Masculino</option>
            <option value="2">Femenino</option>
        </select>
        @error('genero_civil')
            <livewire:mostrar-alertas :message="$message" />
        @enderror
    </div>
</div>

<div class="grid grid-cols-2">
    <div>
        <x-input-label for="fecha_nacimiento" :value="__('Fecha de Nacimiento')" />

        <x-text-input id="fecha_nacimiento" class="block mt-1 w-full" type="date" wire:model="fecha_nacimiento" :value="old('fecha_nacimiento')" />

        @error('fecha_nacimiento')
            <livewire:mostrar-alertas :message="$message" />
        @enderror
    </div>

    <div>
        <x-input-label for="fecha_nacimiento_civil" :value="__('Fecha de Nacimiento')" />

        <x-text-input id="fecha_nacimiento_civil" class="block mt-1 w-full" type="date" wire:model="fecha_nacimiento_civil" :value="old('fecha_nacimiento_civil')" />

        @error('fecha_nacimiento_civil')
            <livewire:mostrar-alertas :message="$message" />
        @enderror
    </div>
</div>
<div class="grid grid-cols-2">
    <div>
        <x-input-label for="lugar_nacimiento" :value="__('Lugar de Nacimiento')" />

        <x-text-input id="lugar_nacimiento" class="block mt-1 w-full" type="text" wire:model="lugar_nacimiento" :value="old('lugar_nacimiento')" placeholder="Ciudad o Provincia"/>

        @error('lugar_nacimiento')
            <livewire:mostrar-alertas :message="$message" />
        @enderror
    </div>

    <div>
        <x-input-label for="lugar_nacimiento_civil" :value="__('Lugar de Nacimiento')" />

        <x-text-input id="lugar_nacimiento_civil" class="block mt-1 w-full" type="text" wire:model="lugar_nacimiento_civil" :value="old('lugar_nacimiento_civil')" placeholder="Ciudad o Provincia"/>

        @error('lugar_nacimiento_civil')
            <livewire:mostrar-alertas :message="$message" />
        @enderror
    </div>

</div>

<h2 class="block text-md text-gray-700 font-bold uppercase mb-2 text-center">datos de los padres</h2>

    <div class="grid grid-cols-2">
        
        <div >
            <x-input-label for="nombre_madre" :value="__('Nombre de la Madre')" />
            <x-text-input id="nombre_madre" class="block mt-1 w-full" type="text" wire:model="nombre_madre" :value="old('nombre_madre')" placeholder="Nombre de la Madre"/>

            @error('nombre_madre')
                <livewire:mostrar-alertas :message="$message" />
            @enderror

        </div>
        <div >
            <x-input-label for="nombre_madre_civil" :value="__('Nombre de la Madre')" />
            <x-text-input id="nombre_madre_civil" class="block mt-1 w-full" type="text" wire:model="nombre_madre_civil" :value="old('nombre_madre_civil')" placeholder="Nombre de la Madre"/>

            @error('nombre_madre_civil')
                <livewire:mostrar-alertas :message="$message" />
            @enderror

        </div>
    </div>
    <div class="grid grid-cols-2">

        <div>
            <x-input-label for="cedula_madre" :value="__('Cedula de la Madre')" />
            <x-text-input id="cedula_madre" class="block mt-1 w-full" type="text" wire:model="cedula_madre" :value="old('cedula_madre')" placeholder="Cédula con guiones"/>

            @error('cedula_madre')
                <livewire:mostrar-alertas :message="$message" />
            @enderror

        </div>

        <div>
            <x-input-label for="cedula_madre_civil" :value="__('Cedula de la Madre')" />
            <x-text-input id="cedula_madre_civil" class="block mt-1 w-full" type="text" wire:model="cedula_madre_civil" :value="old('cedula_madre_civil')" placeholder="Cédula con guiones"/>

            @error('cedula_madre_civil')
                <livewire:mostrar-alertas :message="$message" />
            @enderror

        </div>

    </div>

        

        <div class="grid grid-cols-2">

                <div>
                    <x-input-label for="nombre_padre" :value="__('Nombre del Padre')" />
                <x-text-input id="nombre_padre" class="block mt-1 w-full" type="text" wire:model="nombre_padre" :value="old('nombre_padre')" placeholder="Nombre del Padre"/>

                @error('nombre_padre')
                    <livewire:mostrar-alertas :message="$message" />
                @enderror

            </div>

            <div>
                <x-input-label for="nombre_padre_civil" :value="__('Nombre del Padre')" />
                <x-text-input id="nombre_padre_civil" class="block mt-1 w-full" type="text" wire:model="nombre_padre_civil" :value="old('nombre_padre_civil')" placeholder="Nombre del Padre"/>

                @error('nombre_padre_civil')
                    <livewire:mostrar-alertas :message="$message" />
                @enderror

            </div>
        </div>

        <div class="grid grid-cols-2">
            <div>
                <x-input-label for="cedula_padre" :value="__('cedula del Padre')" />
                <x-text-input id="cedula_padre" class="block mt-1 w-full" type="text" wire:model="cedula_padre" :value="old('cedula_padre')" placeholder="Cédula con guiones"/>


                @error('cedula_padre')
                <livewire:mostrar-alertas :message="$message" />
            @enderror

            </div>

            <div>
                <x-input-label for="cedula_padre_civil" :value="__('cedula del Padre')" />
                <x-text-input id="cedula_padre_civil" class="block mt-1 w-full" type="text" wire:model="cedula_padre_civil" :value="old('cedula_padre_civil')" placeholder="Cédula con guiones"/>


                @error('cedula_padre_civil')
                <livewire:mostrar-alertas :message="$message" />
            @enderror

            </div>
           
        </div>
    

        <div>
            <h2 class="block text-md text-gray-700 font-bold uppercase mb-2 text-center">datos de los padrinos</h2>

        </div>
            <div class="grid grid-cols-2">
                <div>
                    <x-input-label for="nombre_padrino" :value="__('padrino')" />
                <x-text-input id="nombre_padrino" class="block mt-1 w-full" type="text" wire:model="nombre_padrino" :value="old('nombre_padrino')" placeholder="Nombre del padrino"/>

                @error('nombre_padrino')
                <livewire:mostrar-alertas :message="$message" />
            @enderror
            </div>

            <div>
                <x-input-label for="nombre_padrino_civil" :value="__('padrino')" />
            <x-text-input id="nombre_padrino_civil" class="block mt-1 w-full" type="text" wire:model="" :value="old('nombre_padrino_civil')" placeholder="Nombre del padrino"/>

            @error('nombre_padrino_civil')
            <livewire:mostrar-alertas :message="$message" />
        @enderror
        </div>
        </div>
            <div class="grid grid-cols-2">

            <div>
                <x-input-label for="nombre_madrina" :value="__('madrina')" />
                <x-text-input id="nombre_madrina" class="block mt-1 w-full" type="text" wire:model="nombre_madrina" :value="old('nombre_madrina')" placeholder="Nombre de la madrina"/>
    
                @error('nombre_madrina')
                <livewire:mostrar-alertas :message="$message" />
            @enderror
    
            </div>

            <div>
                <x-input-label for="nombre_madrina_civil" :value="__('madrina')" />
                <x-text-input id="nombre_madrina_civil" class="block mt-1 w-full" type="text" wire:model="nombre_madrina_civil" :value="old('nombre_madrina_civil')" placeholder="Nombre de la madrina"/>
    
                @error('nombre_madrina_civil')
                <livewire:mostrar-alertas :message="$message" />
            @enderror
    
            </div>

        </div>

  
   

    <x-primary-button class="w-full justify-center">
        {{ __('Guardar') }}
    </x-primary-button>
    

</form>
