
<form class="md:w-full space-y-5" wire:submit.prevent='guardar'>
    <h2 class="block text-md text-gray-700 font-bold uppercase mb-2 text-center mt-2">Datos del libro de Decretos</h2>

    <div class="grid grid-cols-3">
        <div>
            <x-input-label for="libro_decreto" :value="__('No. Libro')" />

            <x-text-input id="libro_decreto" class="block mt-1 w-full" type="text" 
            wire:model="libro_decreto" 
            :value="old('libro_decreto')" placeholder="No. Libro" autofocus/>

            @error('libro_decreto')
            <livewire:mostrar-alertas :message="$message" />
        @enderror

        </div>

        <div>
            <x-input-label for="folio_decreto" :value="__('folio')" />

            <x-text-input id="folio_decreto" class="block mt-1 w-full" type="text" 
            wire:model="folio_decreto" 
            :value="old('folio_decreto')" placeholder="Folio o Pág"/>
            @error('folio_decreto')
            <livewire:mostrar-alertas :message="$message" />
        @enderror
        </div>
        
        <div>


            <x-input-label for="no_decreto" :value="__('No. #')" />

            <x-text-input id="no_decreto" class="block mt-1 w-full" type="text" wire:model="no_decreto" :value="old('no_decreto')" placeholder="No. de Acta"/>

            @error('no_decreto')
            <livewire:mostrar-alertas :message="$message" />
        @enderror
        </div>
    </div>
    
     <div class="grid grid-cols-3">
        <div>
            <x-input-label for="parroquia_id" :value="__('Parroquia que solicita')" />

            <select wire:model="parroquia_id" id="parroquia_id" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full">
            <option value="">Seleccione</option>
                @foreach ($parroquias as $parroquia)
                    <option value="{{$parroquia->id}}">{{$parroquia->parroquia}}</option>
                @endforeach
            </select>
             
            @error('parroquia_id')
            <livewire:mostrar-alertas :message="$message" />
        @enderror

        </div>

        <div>
            <x-input-label for="fecha_solicitud" :value="__('Fecha')" />
    
            <x-text-input id="fecha_solicitud" class="block mt-1 w-full" type="date" wire:model="fecha_solicitud" :value="old('fecha_solicitud')" />

            @error('fecha_solicitud')
            <livewire:mostrar-alertas :message="$message" />
        @enderror
    
        </div>

        <div>
            <x-input-label for="bautizado" :value="__('Nombre del Bautizado')" />

            <x-text-input id="bautizado" class="block mt-1 w-full" type="text" 
            wire:model="bautizado" 
            :value="old('bautizado')" placeholder="Primer y Segundo Nombre"/>
            @error('bautizado')
            <livewire:mostrar-alertas :message="$message" />
        @enderror
        </div>
        

    </div>

    <h2 class="block text-md text-gray-700 font-bold uppercase mb-2 text-center mt-2">Datos del Certificado de Bautismo</h2>

    <div class="grid grid-cols-3">
        <div>
            <x-input-label for="libro_bautismo" :value="__('numero del libro')" />

            <x-text-input id="libro_bautismo" class="block mt-1 w-full" type="text" 
            wire:model="libro_bautismo" 
            :value="old('libro_bautismo')" placeholder="No. Libro"/>

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


            <x-input-label for="acta_bautismo" :value="__('No. del acta')" />

            <x-text-input id="acta_bautismo" class="block mt-1 w-full" type="text" wire:model="acta_bautismo" :value="old('acta_bautismo')" placeholder="No. Acta"/>

            @error('acta_bautismo')
            <livewire:mostrar-alertas :message="$message" />
        @enderror
        </div>
    </div>

        <h2 class="block text-md text-gray-700 font-bold uppercase mb-2 text-center mt-2">Documentos Adicionales Recibidos</h2>

    <div class="grid grid-cols-3 gap-2">
       
            
        <div >
    
            <select name="documento.0" wire:model="documento.0" id="documento.0" class="mt-1 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full">
                <option value="">Seleccione</option>
                <option value="Fotocopia del Acta de Nacimiento">Fotocopia del Acta de Nacimiento</option>
                <option value="Fotocopia de la cédula">Fotocopia de la cédula</option>
            </select>
            @error('documento.0')
                <livewire:mostrar-alertas :message="$message" />
            @enderror
        </div>
    
        <div >

            <x-text-input name="titular_documento.0" id="titular_documento.0" class="block mt-1 w-full" type="text" 
          wire:model="titular_documento.0" 
           placeholder="Nombre Completo"
          maxlength="35"/>
  
          @error('titular_documento.0')
              <livewire:mostrar-alertas :message="$message" />
          @enderror
  
      </div>

      
          
      <div class="flex flex-col md:flex-row items-stretch gap-3  md:mt-0">
        <x-text-input name="referencias_documento.0" id="referencias_documento.0" class="block mt-1 w-80" type="text" wire:model="referencias_documento.0"  placeholder="Referencias"/>

        <button class="bg-blue-800 py-2 px-4 rounded-lg text-white text-xl font-bold uppercase text-center mt-1" wire:click.prevent="add({{$i}})">+</button>
        </div>
    </div>

    @foreach ($inputs as $key => $value )
    <div class="grid grid-cols-3 gap-2">
       
            
        <div>
    
            <select wire:model="documento.{{$value}}" id="documento.{{$value}}" class="mt-1 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full">
                <option value="">Seleccione</option>
                <option value="Fotocopia del Acta de Nacimiento">Fotocopia del Acta de Nacimiento</option>
                <option value="Fotocopia de la cédula">Fotocopia de la cédula</option>
            </select>
            @error('documento.{{$value}}')
                <livewire:mostrar-alertas :message="$message" />
            @enderror
        </div>
    
        <div>

            <x-text-input id="titular_documento.{{$value}}" class="block mt-1 w-full" type="text" 
          wire:model="titular_documento.{{$value}}" 
           placeholder="Nombre Completo"
          maxlength="35"/>
  
          @error('titular_documento.{{$value}}')
              <livewire:mostrar-alertas :message="$message" />
          @enderror
  
      </div>
          
      <div class="flex flex-col md:flex-row items-stretch gap-3  md:mt-0">
        <x-text-input id="referencias_documento.{{$value}}" class="block mt-1 w-80" type="text" wire:model="referencias_documento.{{$value}}"  placeholder="Referencias"/>
        <button class="bg-red-600 py-2 px-4 rounded-lg text-white text-xl font-bold uppercase text-center mt-1" wire:click.prevent="remove({{$key}})">-</button>
    </div>
    </div>
    @endforeach


    <h2 class="block text-md text-gray-700 font-bold uppercase mb-2 text-center">notas a agregar</h2>


        <div class="">
        <textarea class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" wire:model="notas" id="notas" cols="30" rows="4"  required></textarea>
        </div>

    <x-primary-button class="w-full justify-center">
        {{ __('Guardar') }}
    </x-primary-button> 
    
</form>
