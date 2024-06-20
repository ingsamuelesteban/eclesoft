<div>
    <livewire:filtrar-documento/>  
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
      {{ $documentos->links() }}
  </div>

</div>

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
      Livewire.emit('eliminarDocumento', documentoId)
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
