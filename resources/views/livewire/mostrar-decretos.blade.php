<div>
    <livewire:filtrar-decretos/>  
  <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
      @forelse ($decretos as $decreto)
      <div class="p-6 bg-white border-b border-gray-200 md:flex md:justify-between md:items-center">
              <div class="space-y-3">
                  <a href="{{ route('menu.decretos.show', $decreto->id)}}" class="text-xl font-bold">
                      {{ $decreto->nombre}}
                  </a>
                  <p class="text-sm text-indigo-600 font-bold">Creado el: <span class="text-sm text-gray-600 font-bold">{{Carbon\Carbon::parse($decreto->created_at)->isoFormat('L')}}</span></p>
                  <p class="text-sm text-indigo-600 font-bold">Fecha de Nacimiento:<span class="text-sm text-gray-600 font-bold"> {{Carbon\Carbon::parse($decreto->fecha_nacimiento)->isoFormat('L')}}</span></p>
              </div> 

              <div class="flex flex-col md:flex-row items-stretch gap-3  mt-5 md:mt-0">
                  <a href="{{ route('menu.decretos.print', $decreto->id)}}" class="bg-slate-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center " target="_blank">
                      Imprimir
                  </a>

                  <a href="{{ route('menu.decretos.show', $decreto->id)}}"  class="bg-blue-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center ">
                      Abrir
                  </a>

                  <button 
                  wire:click="$emit('mostrarAlerta', {{ $decreto->id }})"
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
      {{ $decretos->links() }}
  </div>

</div>

@push('scripts')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
  Livewire.on('mostrarAlerta', decretoId =>{
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
      Livewire.emit('eliminarDecreto', decretoId)
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
