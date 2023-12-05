
<form class="md:w-full space-y-5" wire:submit.prevent='guardarNoBautizado'>

    <div class="grid grid-cols-3">
    <div>

        <x-input-label for="nombre" :value="__('Nombre(S)')" />

        <x-text-input id="nombre" class="block mt-1 w-full" type="text" 
        wire:model="nombre" 
        :value="old('nombre')" placeholder="Primer y Segundo Nombre"
        maxlength="20" autofocus/>

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
            <div
                x-data="{ isUploading1: false, progress: 0 }"
                x-on:livewire-upload-start="isUploading1 = true"
                x-on:livewire-upload-finish="isUploading1 = false"
                x-on:livewire-upload-error="isUploading1 = false"
                x-on:livewire-upload-progress="progress = $event.detail.progress"
            >  
            <x-text-input id="hospital" class="block mt-1 w-full" type="file" 
            wire:model="hospital" />

            <div wire:loading wire:target="hospital">Subiendo...</div>

            <div x-show="isUploading1" class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">

                
                <div class="bg-blue-600 h-2.5 rounded-full" style="transition: width 1s":style="`width: ${progress}%;`"></div>
            </div>
           
            
            @error('hospital')
                <livewire:mostrar-alertas :message="$message" />
            @enderror
            </div>
            
        </div>

        <div class="grid grid-cols-2">
            <div class="my-2">
                <x-input-label for="escuela" :value="__('Escuela')" />
    
            </div>
            <div x-data="{ isUploading2: false, progress: 0 }"
            x-on:livewire-upload-start="isUploading2 = true"
            x-on:livewire-upload-finish="isUploading2 = false"
            x-on:livewire-upload-error="isUploading2 = false"
            x-on:livewire-upload-progress="progress = $event.detail.progress">  
                <x-text-input id="escuela" class="block mt-1 w-full" type="file" 
                wire:model="escuela" />

                <div wire:loading wire:target="escuela">Subiendo...</div>

                <div x-show="isUploading2" class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                
                    <div class="bg-blue-600 h-2.5 rounded-full my-2" style="transition: width 1s":style="`width: ${progress}%;`"></div>
                </div>
                
                @error('escuela')
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

        <div x-data="{ isUploading3: false, progress: 0 }"
        x-on:livewire-upload-start="isUploading3 = true"
        x-on:livewire-upload-finish="isUploading3 = false"
        x-on:livewire-upload-error="isUploading3 = false"
        x-on:livewire-upload-progress="progress = $event.detail.progress"> 
        <x-text-input id="docpadre" class="block mt-1 w-full" type="file" 
        wire:model="docpadre" />

        <div wire:loading wire:target="docpadre">Subiendo...</div>

                <div x-show="isUploading3" class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                
                    <div class="bg-blue-600 h-2.5 rounded-full my-2" style="transition: width 1s":style="`width: ${progress}%;`"></div>
                </div>
        
        @error('docpadre')
            <livewire:mostrar-alertas :message="$message" />
        @enderror
        </div>
    </div>

    <div class="grid grid-cols-2">
        <div class="my-2">
            <x-input-label for="docmadre" :value="__('Madre.:')" />

        </div>
        <div x-data="{ isUploading4: false, progress: 0 }"
        x-on:livewire-upload-start="isUploading4 = true"
        x-on:livewire-upload-finish="isUploading4 = false"
        x-on:livewire-upload-error="isUploading4 = false"
        x-on:livewire-upload-progress="progress = $event.detail.progress"> 
            <x-text-input id="docmadre" class="block mt-1 w-full" type="file" 
            wire:model="docmadre" />

            <div wire:loading wire:target="docmadre">Subiendo...</div>

                <div x-show="isUploading4" class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                
                    <div class="bg-blue-600 h-2.5 rounded-full my-2" style="transition: width 1s":style="`width: ${progress}%;`"></div>
                </div>
            
            @error('docmadre')
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

    <div wire:loading.remove>
    <x-primary-button class="w-full justify-center" wire:click="$emit('mostrarAlerta')">
        {{ __('Guardar') }}
    </x-primary-button>
    </div>

</form>

@push('scripts')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    Livewire.on('mostrarAlerta'=>{
    Swal.fire({
    title: '¿Eliminar Registro?',
    text: "Un registro eliminado, no se puede recuperar!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Sí, Eliminar!',
    cancelButtonText: 'Cancelar'
    }).then((result) => {
    if (result.isConfirmed) {

        //Eliminar desde base de datos
        Livewire.emit('eliminarBautismo', bautismoId)
        Swal.fire(
        'Se eliminó el resgistro',
        'Eliminado Correctamente.',
        'success'
        )
    }
    })
    })
</script>

@endpush
