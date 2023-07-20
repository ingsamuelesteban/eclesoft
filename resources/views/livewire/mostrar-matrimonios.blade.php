<div>
    <livewire:filtrar-matrimonios/>  
  <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
      @forelse ($matrimonios as $matrimonio)
      <div class="p-6 bg-white border-b border-gray-200 md:flex md:justify-between md:items-center">
              <div class="space-y-3">
                  <a href="{{ route('menu.matrimonios.show', $matrimonio->id)}}" class="text-xl font-bold">
                      {{ $matrimonio->nombre_esposo}} y {{ $matrimonio->nombre_esposa}}
                  </a>
                  <p class="text-sm text-indigo-600 font-bold">Documento Esposo: <span class="text-sm text-gray-600 font-bold">{{ $matrimonio->documento_esposo}}</span></p>
                  <p class="text-sm text-indigo-600 font-bold">Documento Esposa:<span class="text-sm text-gray-600 font-bold"> {{ $matrimonio->documento_esposa}}</span></p>
                  <p class="text-sm text-gray-600 font-bold">Padrino: {{ $matrimonio->nombre_padrino}}</p>
                  <p class="text-sm text-gray-600 font-bold">Madrina: {{ $matrimonio->nombre_madrina}}</p>
              </div> 

              <div class="flex flex-col md:flex-row items-stretch gap-3  mt-5 md:mt-0">
                  <a href="{{ route('menu.matrimonios.print', $matrimonio->id)}}" class="bg-slate-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center " target="_blank">
                      Imprimir
                  </a>

                  <a href="{{ route('menu.matrimonios.edit', $matrimonio->id)}}" class="bg-blue-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center ">
                      Editar
                  </a>

                  <button 
                  wire:click="$emit('mostrarAlerta', {{ $matrimonio->id }})"
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
      {{ $matrimonios->links() }}
  </div>

</div>

@push('scripts')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
  Livewire.on('mostrarAlerta', matrimonioId =>{
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
      Livewire.emit('eliminarMatrimonio', matrimonioId)
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
