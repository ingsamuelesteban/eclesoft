
<form class="md:w-full space-y-5" wire:submit.prevent='crearActa'>
    <h2 class="block text-md text-gray-700 font-bold uppercase mb-2 text-center mt-2">Datos del libro de Bautismo</h2>

    <div class="grid grid-cols-3">
        <div>
            <x-input-label for="libro_bautismo" :value="__('No. Libro')" />

            <x-text-input id="libro_bautismo" class="block mt-1 w-full" type="text" 
            wire:model="libro_bautismo" 
            :value="old('libro_bautismo')" placeholder="No. Libro" autofocus/>

            @error('libro_bautismo')
                <livewire:mostrar-alertas :message="$message" />
            @enderror

        </div>

        <div>
            <x-input-label for="folio_bautismo" :value="__('folio')" />

            <x-text-input id="folio_bautismo" class="block mt-1 w-full" type="text" 
            wire:model="folio_bautismo" 
            :value="old('folio_bautismo')" placeholder="Folio"/>
            @error('folio_bautismo')
            <livewire:mostrar-alertas :message="$message" />
        @enderror
        </div>
        
        <div>


            <x-input-label for="no_bautismo" :value="__('No. de Acta')" />

            <x-text-input id="no_bautismo" class="block mt-1 w-full" type="text" wire:model="no_bautismo" :value="old('no_bautismo')" placeholder="No. de Acta"/>

            @error('no_bautismo')
            <livewire:mostrar-alertas :message="$message"/>
        @enderror
        </div>
    </div>

        <h2 class="block text-md text-gray-700 font-bold uppercase mb-2 text-center mt-2">datos de la celebración</h2>

    <div class="grid grid-cols-2">
       {{-- <div>
            <x-input-label for="parroquia" :value="__('Parroquia o Capilla')" />

            <select wire:model="parroquia" id="parroquia" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full">
            <option value="">-- Seleccione --</option>
                    @foreach ($comunidades as $comunidad)
                        <option value="{{ $comunidad->nombre_comunidad}}">{{$comunidad->nombre_comunidad}}</option>
                    @endforeach
             </select>

            @error('parroquia')
            <livewire:mostrar-alertas :message="$message" />
        @enderror

        </div>

        <div>
            <x-input-label for="ub_parroquia" :value="__('Lugar')" />

            <select wire:model="ub_parroquia" id="ub_parroquia" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full">
                <option value="">-- Seleccione --</option>
                @foreach ($comunidades as $comunidad)
                    <option value="{{ $comunidad->ubicacion}}">{{$comunidad->ubicacion}}</option>
                @endforeach
            </select>

            @error('ub_parroquia')
            <livewire:mostrar-alertas :message="$message" />
        @enderror
        </div>
        --}}
                <div>
            <x-input-label for="fecha_celebracion" :value="__('Fecha')" />
    
            <x-text-input id="fecha_celebracion" class="block mt-1 w-full" type="date" wire:model="fecha_celebracion" :value="old('fecha_celebracion')" min="1111-11-11" />

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


    <h2 class="block text-md text-gray-700 font-bold uppercase mb-2 text-center">datos del bautizado</h2>


    <div class="grid grid-cols-2">
    <div>

        <x-input-label for="nombre" :value="__('Nombre(S)')" />

        <x-text-input id="nombre" class="block mt-1 w-full" type="text" 
        wire:model="nombre" 
        :value="old('nombre')" placeholder="Primer y Segundo Nombre"
        maxlength="35"/>

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
        <x-input-label for="fecha_nacimiento" :value="__('Fecha de Nacimiento')" />

        <x-text-input min="1111-11-11" id="fecha_nacimiento" class="block mt-1 w-full" type="date" wire:model="fecha_nacimiento" :value="old('fecha_nacimiento')" />

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


    <h2 class="block text-md text-gray-700 font-bold uppercase mb-2 text-center mt-2">Datos del libro de nacimiento</h2>

    <div class="grid grid-cols-3">
        <div>
            <x-input-label for="no_libro" :value="__('numero')" />

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


            <x-input-label for="no_declaracion" :value="__('No. de declaración')" />

            <x-text-input id="no_declaracion" class="block mt-1 w-full" type="text" wire:model="no_declaracion" :value="old('no_declaracion')" placeholder="No. Declaración"/>

            @error('no_declaracion')
            <livewire:mostrar-alertas :message="$message" />
        @enderror
        </div>
    </div>


    <div class="grid grid-cols-3">
        <div>
            <x-input-label for="año" :value="__('año')" />

            <x-text-input id="año" class="block mt-1 w-full" type="text" 
            wire:model="año" 
            :value="old('año')" placeholder="Ej. 2022"/>

            @error('año')
            <livewire:mostrar-alertas :message="$message" />
        @enderror
        </div>

        <div>
            <x-input-label for="circunscripcion" :value="__('circunscripcion')" />

            <x-text-input id="circunscripcion" class="block mt-1 w-full" type="text" wire:model="circunscripcion" :value="old('circunscripcion')" placeholder="Ej. Primera"/>

            @error('circunscripcion')
            <livewire:mostrar-alertas :message="$message" />
        @enderror
        </div>
        <div>
            
            <x-input-label for="oficialia" :value="__('Oficialía')" />

            <x-text-input id="oficialia" class="block mt-1 w-full" type="text" wire:model="oficialia" :value="old('oficialia')" placeholder="Ej. Bani"/>

            @error('oficialia')
            <livewire:mostrar-alertas :message="$message" />
        @enderror
        </div>
        
    </div>

    <div>
        <x-input-label for="padrinos" :value="__('Datos de los padrinos')" />

    </div>
        <div class="grid grid-cols-2">
            <div>
            <x-text-input id="padrinos" class="block mt-1 w-full" type="text" wire:model="nombre_madrina" :value="old('nombre_madrina')" placeholder="Nombre de la Madrina"/>

            @error('nombre_madrina')
            <livewire:mostrar-alertas :message="$message" />
        @enderror
        </div>

        <div>
            <x-text-input id="nombre_padrino" class="block mt-1 w-full" type="text" wire:model="nombre_padrino" :value="old('nombre_padrino')" placeholder="Nombre del Padrino"/>

            @error('nombre_padrino')
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
