<form class="md:w-full space-y-5" wire:submit.prevent='editarParroquia'>

    <h2 class="block text-md text-gray-700 font-bold uppercase mb-2 text-center">Datos almacenados</h2>

    <div class="grid grid-cols-2">
        <div>
            <x-input-label for="diocesis" :value="__('diósecis')" />

            <x-text-input id="diocesis" class="block mt-1 w-full" type="text" 
            wire:model="diocesis" 
            :value="old('diocesis')" placeholder="Ej. Diócesis de Bani"/>

            @error('diocesis')
            <livewire:mostrar-alertas :message="$message" />
        @enderror

        </div>

        <div>
            <x-input-label for="obispo" :value="__('obispo')" />

            <x-text-input id="obispo" class="block mt-1 w-full" type="text" 
            wire:model="obispo" 
            :value="old('obispo')" placeholder="Ej. Monseñor Juan Perez"/>
            @error('obispo')
            <livewire:mostrar-alertas :message="$message" />
        @enderror
        </div>

    </div>


    <div class="grid grid-cols-2">
        <div>
            <x-input-label for="parroquia" :value="__('Nombre')" />

            <x-text-input id="parroquia" class="block mt-1 w-full" type="text" 
            wire:model="parroquia" 
            :value="old('parroquia')" placeholder="Ej. Parroquia Santa Teresa"/>

            @error('parroquia')
            <livewire:mostrar-alertas :message="$message" />
        @enderror

        </div>

        <div>
            <x-input-label for="telefonop" :value="__('Telefono')" />

            <x-text-input id="telefonop" class="block mt-1 w-full" type="text" 
            wire:model="telefonop" 
            :value="old('telefonop')" placeholder="Telefono sin Guiones" />
            @error('telefonop')
            <livewire:mostrar-alertas :message="$message" />
        @enderror
        </div>

    </div>

    <div class="grid grid-cols-3">
        <div>
            <x-input-label for="calle" :value="__('Calle y No.')" />

            <x-text-input id="calle" class="block mt-1 w-full" type="text" 
            wire:model="calle" 
            :value="old('calle')" placeholder="Ej. Nicaragua #8"/>

            @error('calle')
            <livewire:mostrar-alertas :message="$message" />
        @enderror

        </div>

        <div>
            <x-input-label for="ciudad" :value="__('Ciudad')" />

            <x-text-input id="ciudad" class="block mt-1 w-full" type="text" 
            wire:model="ciudad" 
            :value="old('ciudad')" placeholder="Ej. Villa Altagracia" />
            @error('ciudad')
            <livewire:mostrar-alertas :message="$message" />
        @enderror
        </div>

        <div>
            <x-input-label for="provincia" :value="__('Provincia')" />

            <x-text-input id="provincia" class="block mt-1 w-full" type="text" 
            wire:model="provincia" 
            :value="old('provincia')" placeholder="Ej. San Cristobal" />
            @error('provincia')
            <livewire:mostrar-alertas :message="$message" />
        @enderror
        </div>

    </div>


        <div class="grid grid-cols-2">
            <div>
                <x-input-label for="parroco" :value="__('Parroco')" />

                
                <x-text-input id="parroco" class="block mt-1 w-full" type="text" 
                wire:model="parroco" 
                :value="old('parroco')" placeholder="Ej. Rev. P. Juan Perez"/>

                @error('parroco')
                <livewire:mostrar-alertas :message="$message" />
            @enderror

            </div>

            <div>
                <x-input-label for="vicario" :value="__('vicario')" />

                
                <x-text-input id="vicario" class="block mt-1 w-full" type="text" 
                wire:model="vicario" 
                :value="old('vicario')" placeholder="Ej. Rev. Diac. Jose Veloz"/>

                @error('vicario')
                <livewire:mostrar-alertas :message="$message" />
            @enderror

            </div>

        </div>
        
        <div>
            <x-input-label for="logo" :value="__('Logo')" />

            
            <x-text-input id="logo" class="block mt-1 w-full" type="file" 
            wire:model="logo_nuevo" 
            accept="image/*"/>

            <div class="my-5 w-52">
                <x-input-label  :value="__('Logo Actual')" />

                <img src="{{ global_asset('storage/img/' . $logo) }}" alt="{{ 'Logo Actual' }}">
            </div>

            <div class="my-5 w-52">
                @if ($logo_nuevo)
                Logo Nuevo:
                <img src="{{ $logo_nuevo->temporaryUrl() }}" >
                    
                @endif


            </div>

            @error('logo_nuevo')
                <livewire:mostrar-alertas :message="$message" />
            @enderror 

        </div>


<div class="flex justify-center space-x-3">
    <x-input-label for="color_borde" :value="__('Color del Borde')" />
    <x-text-input id="color_borde" type="color" wire:model="color_borde" />

</div>



 


        <x-primary-button class="w-full justify-center">
            {{ __('Guardar Cambios') }}
        </x-primary-button>
        
    
 </form>

 