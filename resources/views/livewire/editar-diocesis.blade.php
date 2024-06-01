<form class="md:w-full space-y-5" wire:submit.prevent='editarDiocesis'>

    <h2 class="block text-md text-gray-700 font-bold uppercase mb-2 text-center">Configure su Diócesis</h2>

    <div class="grid grid-cols-3">
        <div>
            <x-input-label for="nombre" :value="__('nombre')" />

            <x-text-input id="nombre" class="block mt-1 w-full capitalize" type="text" 
            wire:model="nombre" 
            :value="old('nombre')" placeholder="Ej. Diócesis de Bani"/>

            @error('nombre')
            <livewire:mostrar-alertas :message="$message" />
        @enderror

        </div>

        <div>
            <x-input-label for="obispo" :value="__('obispo ó administrador')" />

            <x-text-input id="obispo" class="block mt-1 w-full capitalize" type="text" 
            wire:model="obispo" 
            :value="old('obispo')" placeholder="Ej. Monseñor Juan Perez"/>
            @error('obispo')
            <livewire:mostrar-alertas :message="$message" />
        @enderror
        </div>
        <div>
            <x-input-label for="titulo" :value="__('Titulo')" />


            <select wire:model="titulo" id="titulo" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full">
                    <option value="">--Seleccione--</option>
                    <option value="Obispo Titular">Obispo Titular</option>
                    <option value="Administrador Apostólico">Administrador Apostólico</option>
                    <option value="Administrador Diocesano">Administrador Diocesano</option>
                
            </select>
             
            @error('titulo')
            <livewire:mostrar-alertas :message="$message" />
        @enderror

        </div>

    </div>

    <div class="grid grid-cols-2">

        <div>
            <x-input-label for="vicario_general" :value="__('vicario general')" />

            
            <x-text-input id="vicario_general" class="block mt-1 w-full capitalize" type="text" 
            wire:model="vicario_general" 
            :value="old('vicario_general')" placeholder="Ej. Rev. P. Jose Veloz"/>

            @error('vicario_general')
            <livewire:mostrar-alertas :message="$message" />
        @enderror

        </div>
        <div>
            <x-input-label for="canciller" :value="__('canciller')" />

            
            <x-text-input id="canciller" class="block mt-1 w-full capitalize" type="text" 
            wire:model="canciller" 
            :value="old('canciller')" placeholder="Ej. Rev. P. Juan Perez"/>

            @error('canciller')
            <livewire:mostrar-alertas :message="$message" />
        @enderror
        </div>
    </div>


    <div class="grid grid-cols-3">

        <div>
            <x-input-label for="telefono" :value="__('Telefono')" />

            <x-text-input id="telefono" class="block mt-1 w-full" type="tel" 
            wire:model="telefono" 
            :value="old('telefono')" placeholder="Telefono con Guiones" />
            @error('telefono')
            <livewire:mostrar-alertas :message="$message" />
        @enderror
        </div>

        <div>
            <x-input-label for="rnc" :value="__('rnc')" />

            <x-text-input id="rnc" class="block mt-1 w-full" type="text" 
            wire:model="rnc" 
            :value="old('rnc')" placeholder="RNC" />
            @error('rnc')
            <livewire:mostrar-alertas :message="$message" />
        @enderror
        </div>
        <div>
            <x-input-label for="correo" :value="__('correo')" />

            
            <x-text-input id="correo" class="block mt-1 w-full" type="text" 
            wire:model="correo" 
            :value="old('correo')" placeholder="Ej. paroquia@parroquia.com"/>

            @error('correo')
            <livewire:mostrar-alertas :message="$message" />
        @enderror 
    </div>

    </div>

    <div class="grid grid-cols-3">
        <div>
            <x-input-label for="calle" :value="__('Calle y No.')" />

            <x-text-input id="calle" class="block mt-1 w-full capitalize" type="text" 
            wire:model="calle" 
            :value="old('calle')" placeholder="Ej. Nicaragua #8"/>

            @error('calle')
            <livewire:mostrar-alertas :message="$message" />
        @enderror

        </div>

        <div>
            <x-input-label for="ciudad" :value="__('Ciudad')" />

            <x-text-input id="ciudad" class="block mt-1 w-full capitalize" type="text" 
            wire:model="ciudad" 
            :value="old('ciudad')" placeholder="Ej. Villa Altagracia" />
            @error('ciudad')
            <livewire:mostrar-alertas :message="$message" />
        @enderror
        </div>

        <div>
            <x-input-label for="provincia" :value="__('Provincia')" />

            <x-text-input id="provincia" class="block mt-1 w-full capitalize" type="text" 
            wire:model="provincia" 
            :value="old('provincia')" placeholder="Ej. San Cristobal" />
            @error('provincia')
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
    </div>
{{--         <div class="flex justify-start space-x-3">
            <x-input-label for="color_borde" :value="__('Color del Borde')" />
            <x-text-input id="color_borde" type="color" wire:model="color_borde" />
        
        </div> --}}
        

        <x-primary-button class="w-full justify-center">
            {{ __('Guardar') }}
        </x-primary-button>
        
    
 </form>