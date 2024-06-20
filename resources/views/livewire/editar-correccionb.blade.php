
<form name="editar" class="md:w-full space-y-5" wire:submit.prevent='editarCorreccionb'>
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


    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        @forelse ($documentos as $documento)
        <div class="p-6 bg-white border-b border-gray-200 md:flex md:justify-between md:items-center">
                <div class="space-y-3">
                    
                    <p class="text-sm text-indigo-600 font-bold">Tipo: <span class="text-sm text-gray-600 font-bold">{{ $documento->documento}}</span></p>
                    <p class="text-sm text-indigo-600 font-bold">De:<span class="text-sm text-gray-600 font-bold"> {{ $documento->titular_documento}}</span></p>
                    <p class="text-sm text-indigo-600 font-bold">Referencias:<span class="text-sm text-gray-600 font-bold"> {{ $documento->referencias_documento}}</span></p>
                </div> 
  
                <div class="flex flex-col md:flex-row items-stretch gap-3  mt-5 md:mt-0">
  
                    <button 
                    wire:click="editDocument({{$documento->id}})"
                    class="bg-blue-600 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center ">
                        Editar
                    </button>
                    <button 
                    wire:click="$emit('mostrarAlerta', {{ $documento->id }})"
                    class="bg-red-600 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center ">
                        Eliminar
                    </button>
                </div>
        </div>
        @empty
        <p class="p-3 text-center text-sm text-gray-600">No hay registros almacenados...</p>
        
        @endforelse
    </div>
  
    <div class="mt-10">
        {{$documentos->links()}}
    </div>

    
    <x-dialog wire:model.defer="showEditModal">
        <x-slot name="title">Editar Documento</x-slot>

        <x-slot name="content">
            <div class="grid grid-rows-3 gap-2">
       
            
                <div class="text-black" >
            
                    <select name="documento" wire:model="editar.documento" id="documento" class="mt-1 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full">
                        <option  value="">Seleccione</option>
                        <option value="Fotocopia del Acta de Nacimiento">Fotocopia del Acta de Nacimiento</option>
                        <option value="Fotocopia de la cédula">Fotocopia de la cédula</option>
                    </select>
                    @error('editar.documento')
                        <livewire:mostrar-alertas :message="$message" />
                    @enderror
                </div>
            
                <div >
        
                    <x-text-input name="titular_documento" id="titular_documento" class="block text-black mt-1 w-full" type="text" 
                  wire:model="editar.titular_documento" 
                   placeholder="Nombre Completo"
                  maxlength="35"/>
          
                  @error('editar.titular_documento')
                      <livewire:mostrar-alertas :message="$message" />
                  @enderror
          
              </div>
        
              
                  
              <div >
                <x-text-input name="referencias_documento" id="referencias_documento" class="block text-black mt-1 w-full" type="text" wire:model="editar.referencias_documento"  placeholder="Referencias"/>
                @error('editar.referencias_documento')
                      <livewire:mostrar-alertas :message="$message" />
                  @enderror
             </div> 
            </div>
        </x-slot>

        <x-slot name="footer">
            <div class="flex flex-col md:flex-row items-stretch gap-3  mt-5 md:mt-0">
            <button wire:click="$set('showEditModal',false)" class="bg-gray-600 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center ">Cancelar</button>
            <button wire:click='saveDocument' class="bg-blue-600 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center ">Guardar</button>
            </div>
        </x-slot>
    </x-dialog>
    

    @push('scripts')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
  Livewire.on('mostrarAlerta', documentoId =>{
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
      Livewire.emit('eliminarDocument', documentoId)
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


    <h2 class="block text-md text-gray-700 font-bold uppercase mb-2 text-center">notas</h2>


        <div class="">
        <textarea class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" wire:model="notas" id="notas" cols="30" rows="4"  required></textarea>
        </div>

    <x-primary-button class="w-full justify-center">
        {{ __('Guardar') }}
    </x-primary-button> 
    
</form>
