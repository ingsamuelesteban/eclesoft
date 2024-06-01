<div>
    <livewire:filtrar-usuarios/>  
  <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
      @forelse ($usuarios as $usuario)
      <div class="p-6 bg-white border-b border-gray-200 md:flex md:justify-between md:items-center">
              <div class="space-y-3">
                  <a href="#" class="text-xl font-bold">
                      {{ $usuario->name }}
                  </a>
                  <p class="text-sm text-indigo-600 font-bold">Correo: <span class="text-sm text-gray-600 font-bold">{{ $usuario->email}}</span></p>
                  @if ($usuario->rol==1)
                  <p class="text-sm text-gray-600 font-bold">Posición: Administrador de Sistema</p>    
                  @else
                  <p class="text-sm text-gray-600 font-bold">Posición: Oficinista</p>  
                  @endif
                  </div> 

              <div class="flex flex-col md:flex-row items-stretch gap-3  mt-5 md:mt-0">
                  {{-- <a href="{{ route('menu.usuario.print', $usuario->id)}}" class="bg-slate-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center " target="_blank">
                      Imprimir
                  </a> --}}

                  <a href="{{ route('menu.diocesis.usuarios.edit', $usuario->id)}}" class="bg-blue-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center ">
                      Editar
                  </a>

                  <button 
                  wire:click="$emit('mostrarAlerta', {{ $usuario->id }})"
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
      {{ $usuarios->links() }}
  </div>

</div>

@push('scripts')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
  Livewire.on('mostrarAlerta', usuarioId =>{
  Swal.fire({
  title: '¿Eliminar Registro?',
  text: "Un usuario eliminado, no se puede recuperar!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Sí, Eliminar!',
  cancelButtonText: 'Cancelar'
  }).then((result) => {
  if (result.isConfirmed) {

      //Eliminar desde base de datos
      Livewire.emit('eliminarUsuario', usuarioId)
      Swal.fire(
      'Se eliminó el usuario',
      'Eliminado Correctamente.',
      'success'
      )
  }
  })
  })
</script>

@endpush