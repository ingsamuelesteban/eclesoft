
<form class="md:w-full space-y-5" wire:submit.prevent='editarNoBautizado'>

    <div class="grid grid-cols-3">
    <div>

        <x-input-label for="nombre" :value="__('Nombre(S)')" />

        <x-text-input id="nombre" class="block mt-1 w-full" type="text" 
        wire:model="nombre" 
        :value="old('nombre')" placeholder="Primer y Segundo Nombre"
        maxlength="35" autofocus/>

        @error('nombre')
            <livewire:mostrar-alertas :message="$message" />
        @enderror

    </div>

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
        <x-input-label for="fecha_nacimiento" :value="__('Fecha de Nacimiento')" />

        <x-text-input id="fecha_nacimiento" class="block mt-1 w-full" type="date" wire:model="fecha_nacimiento" :value="old('fecha_nacimiento')" />

        @error('fecha_nacimiento')
            <livewire:mostrar-alertas :message="$message" />
        @enderror
    </div>
</div>


<x-input-label for="padres" :value="__('Datos de los Padres')" />

<div class="grid grid-cols-2">
    
    <div >
        <x-text-input id="padres" class="block mt-1 w-full" type="text" wire:model="nombre_padre" :value="old('nombre_padre')" placeholder="Nombre del Padre"/>

        @error('nombre_padre')
            <livewire:mostrar-alertas :message="$message" />
        @enderror

    </div>

    <div>
        <x-text-input id="cedula_padre" class="block mt-1 w-full" type="text" wire:model="cedula_padre" :value="old('cedula_padre')" placeholder="Cédula del padre con guiones"/>


        @error('cedula_padre')
        <livewire:mostrar-alertas :message="$message" />
    @enderror
 

    </div>

</div>

    

    <div class="grid grid-cols-2">

            <div>
                <x-text-input id="nombre_madre" class="block mt-1 w-full" type="text" wire:model="nombre_madre" :value="old('nombre_madre')" placeholder="Nombre de la Madre"/>

                @error('nombre_madre')
                    <livewire:mostrar-alertas :message="$message" />
                @enderror

        </div>
        <div>
            <x-text-input id="cedula_madre" class="block mt-1 w-full" type="text" wire:model="cedula_madre" :value="old('cedula_madre')" placeholder="Cédula de la madre con guiones"/>

            @error('cedula_madre')
                <livewire:mostrar-alertas :message="$message" />
            @enderror

        </div>
       
    </div>

    <x-input-label for="hospital" :value="__('Dcoumentos recibidos')" />
    <div class="grid grid-cols-2 border-dashed border-2 border-indigo-200 ...">
        <div class="grid grid-cols-2">
            <div class="my-2">
            <x-input-label for="hospital" :value="__('Hospital o del Alcalde')" />

            </div>
            <div>  
            <x-text-input id="hospital" class="block mt-1 w-full" type="file" 
            wire:model="hospital_nuevo" />
            
            @error('hospital_nuevo')
                <livewire:mostrar-alertas :message="$message" />
            @enderror
            </div>
        </div>

        <div class="grid grid-cols-2">
            <div class="my-2">
                <x-input-label for="escuela" :value="__('Escuela')" />
    
            </div>
            <div>  
                <x-text-input id="escuela" class="block mt-1 w-full" type="file" 
                wire:model="escuela_nuevo" />
                
                @error('escuela_nuevo')
                    <livewire:mostrar-alertas :message="$message" />
                @enderror
            </div>
        </div>
    </div>

    <div class=" border-dashed border-2 border-indigo-200 ...">
        
            <x-input-label for="docpadre" :value="__('cédulas')" />
         <div class="grid grid-cols-2">

             <div class="grid grid-cols-2">
            <div class="my-2">
            <x-input-label for="docpadre" :value="__('Padre.:')" />

            </div>
            <div>  
            <x-text-input id="docpadre" class="block mt-1 w-full" type="file" 
            wire:model="docpadre_nuevo" />
            
            @error('docpadre_nuevo')
                <livewire:mostrar-alertas :message="$message" />
            @enderror
            </div>
        </div>

        <div class="grid grid-cols-2">
            <div class="my-2">
                <x-input-label for="docmadre" :value="__('Madre.:')" />
    
            </div>
            <div>  
                <x-text-input id="docmadre" class="block mt-1 w-full" type="file" 
                wire:model="docmadre_nuevo" />
                
                @error('docmadre_nuevo')
                    <livewire:mostrar-alertas :message="$message" />
                @enderror
            </div>
        </div>
    </div>
</div>
    

    
    <div>
        <x-input-label for="notas" :value="__('notas al margen')" />

        <textarea class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" wire:model="notas" id="notas" cols="30" rows="4"  :value="old('notas')">--Sin Notas al margen...--</textarea>

    </div>

    <x-primary-button class="w-full justify-center">
        {{ __('Guardar Cambios') }}
    </x-primary-button>
    

</form>
