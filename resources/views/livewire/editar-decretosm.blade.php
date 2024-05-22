<form class="md:w-full space-y-5" wire:submit.prevent='editarDecretom'>

    <h2 class="block text-md text-gray-700 font-bold uppercase  text-center mt-2">editar solicitud de decreto para correcion de matrimonio</h2>

    <p class="text-center uppercase">Favor solo completar los datos que desea corregir.</p>


    <h2 class="block text-md text-gray-700 font-bold uppercase mb-2 text-center">datos de los esposos</h2>

    <div class="grid grid-cols-2">
        <div>
            <h3 class="block text-md text-gray-700 font-bold uppercase mb-2 text-center">IGLESIA</h3>
        </div>
        <div>
            <h3 class="block text-md text-gray-700 font-bold uppercase mb-2 text-center">CIVIL</h3>
        </div>
    </div>

    <h2 class="block text-md text-gray-700 font-bold uppercase mb-2 text-center">Esposa</h2>
    <div class="grid grid-cols-2">
    <div>

        <x-input-label for="nombre_esposa" :value="__('Nombre')" />

        

        <x-text-input id="nombre_esposa" class="block mt-1 w-full" type="text" 
        wire:model="nombre_esposa" 
        :value="old('nombre_esposa')" placeholder="Nombre y/o apellidos" />

        @error('nombre_esposa')
            <livewire:mostrar-alertas :message="$message" />
        @enderror

    </div>

    <div>

        <x-input-label for="nombre_esposa_civil" :value="__('Nombre')" />

        

        <x-text-input id="nombre_esposa_civil" class="block mt-1 w-full" type="text" 
        wire:model="nombre_esposa_civil" 
        :value="old('nombre_esposa_civil')" placeholder="Nombre y/o apellidos"/>

        @error('nombre_esposa_civil')
            <livewire:mostrar-alertas :message="$message" />
        @enderror

    </div>
</div>

<div class="grid grid-cols-2">
        
    <div>
        <x-input-label for="cedula_esposa" :value="__('Documento de identidad')" />

        <x-text-input id="cedula_esposa" class="block mt-1 w-full" type="text" wire:model="cedula_esposa" :value="old('cedula_esposa')" placeholder="Cédula o Pasaporte con guiones"/>


        @error('cedula_esposa')
        <livewire:mostrar-alertas :message="$message" />
    @enderror

    </div>
    <div>
        <x-input-label for="cedula_esposa_civil" :value="__('Documento de identidad')" />

        <x-text-input id="cedula_esposa_civil" class="block mt-1 w-full" type="text" wire:model="cedula_esposa_civil" :value="old('cedula_esposa_civil')" placeholder="Cédula o Pasaporte con guiones"/>


        @error('cedula_esposa_civil')
        <livewire:mostrar-alertas :message="$message" />
    @enderror

    </div>
</div>

<div class="grid grid-cols-2">
    <div>
        <x-input-label for="lugar_nacimiento_esposa" :value="__('Lugar de Nacimiento')" />

        <x-text-input id="lugar_nacimiento_esposa" class="block mt-1 w-full" type="text" wire:model="lugar_nacimiento_esposa" :value="old('lugar_nacimiento_esposa')" placeholder="Ciudad o Provincia"/>

        @error('lugar_nacimiento_esposa')
            <livewire:mostrar-alertas :message="$message" />
        @enderror
    </div>

    <div>
        <x-input-label for="lugar_nacimiento_esposa_civil" :value="__('Lugar de Nacimiento')" />

        <x-text-input id="lugar_nacimiento_esposa_civil" class="block mt-1 w-full" type="text" wire:model="lugar_nacimiento_esposa_civil" :value="old('lugar_nacimiento_esposo_civil')" placeholder="Ciudad o Provincia"/>

        @error('lugar_nacimiento_esposa_civil')
            <livewire:mostrar-alertas :message="$message" />
        @enderror
    </div>
</div>

<div class="grid grid-cols-2">
    <div>
        <x-input-label for="fecha_nacimiento_esposa" :value="__('Fecha de Nacimiento')" />

        <x-text-input id="fecha_nacimiento_esposa" class="block mt-1 w-full" type="date" wire:model="fecha_nacimiento_esposa" :value="old('fecha_nacimiento_esposa')" />

        @error('fecha_nacimiento_esposa')
            <livewire:mostrar-alertas :message="$message" />
        @enderror
    </div>

    <div>
        <x-input-label for="fecha_nacimiento_esposa_civil" :value="__('Fecha de Nacimiento')" />

        <x-text-input id="fecha_nacimiento_esposa_civil" class="block mt-1 w-full" type="date" wire:model="fecha_nacimiento_esposa_civil" :value="old('fecha_nacimiento_civil_esposa')" />

        @error('fecha_nacimiento_esposa_civil')
            <livewire:mostrar-alertas :message="$message" />
        @enderror
    </div>
</div>

<h2 class="block text-md text-gray-700 font-bold uppercase mb-2 text-center">Esposo</h2>
<div class="grid grid-cols-2">
    <div>

        <x-input-label for="nombre_esposo" :value="__('Nombre')" />

        

        <x-text-input id="nombre_esposo" class="block mt-1 w-full" type="text" 
        wire:model="nombre_esposo" 
        :value="old('nombre_esposo')" placeholder="Nombre y/o apellidos" />

        @error('nombre_esposo')
            <livewire:mostrar-alertas :message="$message" />
        @enderror

    </div>

    <div>

        <x-input-label for="nombre_esposo_civil" :value="__('Nombre')" />

        

        <x-text-input id="nombre_esposo_civil" class="block mt-1 w-full" type="text" 
        wire:model="nombre_esposo_civil" 
        :value="old('nombre_esposo_civil')" placeholder="Nombre y/o apellidos"/>

        @error('nombre_esposo_civil')
            <livewire:mostrar-alertas :message="$message" />
        @enderror

    </div>
</div>

<div class="grid grid-cols-2">
        
    <div>
        <x-input-label for="cedula_esposo" :value="__('Documento de identidad')" />

        <x-text-input id="cedula_esposo" class="block mt-1 w-full" type="text" wire:model="cedula_esposo" :value="old('cedula_esposo')" placeholder="Cédula o Pasaporte con guiones"/>


        @error('cedula_esposo')
        <livewire:mostrar-alertas :message="$message" />
    @enderror

    </div>
    <div>
        <x-input-label for="cedula_esposo_civil" :value="__('Documento de identidad')" />

        <x-text-input id="cedula_esposo_civil" class="block mt-1 w-full" type="text" wire:model="cedula_esposo_civil" :value="old('cedula_esposo_civil')" placeholder="Cédula o Pasaporte con guiones"/>


        @error('cedula_esposo_civil')
        <livewire:mostrar-alertas :message="$message" />
    @enderror

    </div>
</div>


<div class="grid grid-cols-2">
    <div>
        <x-input-label for="lugar_nacimiento_esposo" :value="__('Lugar de Nacimiento')" />

        <x-text-input id="lugar_nacimiento_esposo" class="block mt-1 w-full" type="text" wire:model="lugar_nacimiento_esposo" :value="old('lugar_nacimiento_esposo')" placeholder="Ciudad o Provincia"/>

        @error('lugar_nacimiento_esposo')
            <livewire:mostrar-alertas :message="$message" />
        @enderror
    </div>

    <div>
        <x-input-label for="lugar_nacimiento_esposo_civil" :value="__('Lugar de Nacimiento')" />

        <x-text-input id="lugar_nacimiento_esposo_civil" class="block mt-1 w-full" type="text" wire:model="lugar_nacimiento_esposo_civil" :value="old('lugar_nacimiento_esposo_civil')" placeholder="Ciudad o Provincia"/>

        @error('lugar_nacimiento_esposo_civil')
            <livewire:mostrar-alertas :message="$message" />
        @enderror
    </div>
</div>

<div class="grid grid-cols-2">
    <div>
        <x-input-label for="fecha_nacimiento_esposo" :value="__('Fecha de Nacimiento')" />

        <x-text-input id="fecha_nacimiento_esposo" class="block mt-1 w-full" type="date" wire:model="fecha_nacimiento_esposo" :value="old('fecha_nacimiento_esposo')" />

        @error('fecha_nacimiento_esposo')
            <livewire:mostrar-alertas :message="$message" />
        @enderror
    </div>

    <div>
        <x-input-label for="fecha_nacimiento_esposo_civil" :value="__('Fecha de Nacimiento')" />

        <x-text-input id="fecha_nacimiento_esposo_civil" class="block mt-1 w-full" type="date" wire:model="fecha_nacimiento_esposo_civil" :value="old('fecha_nacimiento_esposo_civil')" />

        @error('fecha_nacimiento_esposo_civil')
            <livewire:mostrar-alertas :message="$message" />
        @enderror
    </div>
</div>

    <h2 class="block text-md text-gray-700 font-bold uppercase mb-2 text-center">datos de los padres</h2>

    <div class="grid grid-cols-2">
        <div>
            <h3 class="block text-md text-gray-700 font-bold uppercase mb-2 text-center">IGLESIA</h3>
        </div>
        <div>
            <h3 class="block text-md text-gray-700 font-bold uppercase mb-2 text-center">CIVIL</h3>
        </div>
    </div>

    <h2 class="block text-md text-gray-700 font-bold uppercase mb-2 text-center">Padres de la Esposa</h2>

    <div class="grid grid-cols-2">
        
        <div>
            <x-input-label for="nombre_madre_esposa" :value="__('Nombre de la Madre')" />
            <x-text-input id="nombre_madre_esposa" class="block mt-1 w-full" type="text" wire:model="nombre_madre_esposa" :value="old('nombre_madre_esposa')" placeholder="Nombre Completo"/>

            @error('nombre_madre_esposa')
                <livewire:mostrar-alertas :message="$message" />
            @enderror

        </div>

        <div>
            <x-input-label for="nombre_madre_esposa_civil" :value="__('Nombre de la Madre')" />
            <x-text-input id="nombre_madre_esposa_civil" class="block mt-1 w-full" type="text" wire:model="nombre_madre_esposa_civil" :value="old('nombre_madre_esposa_civil')" placeholder="Nombre Completo"/>

            @error('nombre_madre_esposa_civil')
                <livewire:mostrar-alertas :message="$message" />
            @enderror

        </div>

    </div>

        <div class="grid grid-cols-2">

                <div>
                    <x-input-label for="nombre_padre_esposa_esposa" :value="__('Nombre del Padre')" />
                <x-text-input id="nombre_padre_esposa" class="block mt-1 w-full" type="text" wire:model="nombre_padre_esposa" :value="old('nombre_padre_esposa')" placeholder="Nombre Completo"/>

                @error('nombre_padre_esposa')
                    <livewire:mostrar-alertas :message="$message" />
                @enderror

            </div>

            <div>
                <x-input-label for="nombre_padre_esposa_civil" :value="__('Nombre del Padre')" />
                <x-text-input id="nombre_padre_esposa_civil" class="block mt-1 w-full" type="text" wire:model="nombre_padre_esposa_civil" :value="old('nombre_padre_esposa_civil')" placeholder="Nombre Completo"/>

                @error('nombre_padre_esposa_civil')
                    <livewire:mostrar-alertas :message="$message" />
                @enderror

            </div>
        </div>

    <h2 class="block text-md text-gray-700 font-bold uppercase mb-2 text-center">Padres del Esposo</h2>

    <div class="grid grid-cols-2">
        
        <div>
            <x-input-label for="nombre_madre_esposo" :value="__('Nombre de la Madre')" />
            <x-text-input id="nombre_madre_esposo" class="block mt-1 w-full" type="text" wire:model="nombre_madre_esposo" :value="old('nombre_madre_esposo')" placeholder="Nombre Completo"/>

            @error('nombre_madre_esposo')
                <livewire:mostrar-alertas :message="$message" />
            @enderror

        </div>

        <div>
            <x-input-label for="nombre_madre_esposo_civil" :value="__('Nombre de la Madre')" />
            <x-text-input id="nombre_madre_esposo_civil" class="block mt-1 w-full" type="text" wire:model="nombre_madre_esposo_civil" :value="old('nombre_madre_esposo_civil')" placeholder="Nombre Completo"/>

            @error('nombre_madre_esposo_civil')
                <livewire:mostrar-alertas :message="$message" />
            @enderror

        </div>

    </div>


        <div class="grid grid-cols-2">

                <div>
                    <x-input-label for="nombre_padre_esposo_esposa" :value="__('Nombre del Padre')" />
                <x-text-input id="nombre_padre_esposo" class="block mt-1 w-full" type="text" wire:model="nombre_padre_esposo" :value="old('nombre_padre_esposo')" placeholder="Nombre Completo"/>

                @error('nombre_padre_esposo')
                    <livewire:mostrar-alertas :message="$message" />
                @enderror

            </div>

            <div>
                <x-input-label for="nombre_padre_esposo_civil" :value="__('Nombre del Padre')" />
                <x-text-input id="nombre_padre_esposo_civil" class="block mt-1 w-full" type="text" wire:model="nombre_padre_esposo_civil" :value="old('nombre_padre_esposo_civil')" placeholder="Nombre Completo"/>

                @error('nombre_padre_esposo_civil')
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
            <x-text-input id="nombre_padrino_civil" class="block mt-1 w-full" type="text" wire:model="nombre_padrino_civil" :value="old('nombre_padrino_civil')" placeholder="Nombre del padrino"/>

            @error('nombre_padrino_civil')
            <livewire:mostrar-alertas :message="$message" />
        @enderror
        </div>
        </div>

        <div class="grid grid-cols-2">
            <div>
                <x-input-label for="cedula_padrino" :value="__('Documento de identidad')" />
            <x-text-input id="cedula_padrino" class="block mt-1 w-full" type="text" wire:model="cedula_padrino" :value="old('cedula_padrino')" placeholder="Cédula o Pasaporte"/>

            @error('cedula_padrino')
            <livewire:mostrar-alertas :message="$message" />
        @enderror
        </div>

        <div>
            <x-input-label for="cedula_padrino_civil" :value="__('documento de identidad')" />
        <x-text-input id="cedula_padrino_civil" class="block mt-1 w-full" type="text" wire:model="cedula_padrino_civil" :value="old('cedula_padrino_civil')" placeholder="Cédula o Pasaporte"/>

        @error('cedula_padrino_civil')
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

        
        <div class="grid grid-cols-2">

        <div>
            <x-input-label for="cedula_madrina" :value="__('Documento de identidad')" />
            <x-text-input id="cedula_madrina" class="block mt-1 w-full" type="text" wire:model="cedula_madrina" :value="old('cedula_madrina')" placeholder="Cédula o Pasaporte"/>

            @error('cedula_madrina')
            <livewire:mostrar-alertas :message="$message" />
        @enderror

        </div>

        <div>
            <x-input-label for="cedula_madrina_civil" :value="__('Documento de identidad')" />
            <x-text-input id="cedula_madrina_civil" class="block mt-1 w-full" type="text" wire:model="cedula_madrina_civil" :value="old('cedula_madrina_civil')" placeholder="Cédula o Pasaporte"/>

            @error('cedula_madrina_civil')
            <livewire:mostrar-alertas :message="$message" />
        @enderror

        </div>

    </div>

  
   

    <x-primary-button class="w-full justify-center">
        {{ __('Guardar') }}
    </x-primary-button>
    

</form>
