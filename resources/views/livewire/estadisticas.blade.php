<div>
    <livewire:filtrar-estadisticas/>  
  <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
      <div class="p-6 bg-white border-b border-gray-200 md:flex md:justify-between md:items-center">
              <div class="space-y-3">
                    <p class=" text-xl font-bold">Estadísticas del <span class="text-xl font-bold text-indigo-600">{{$anoCelebracion}}</span></p>
                    <p class="text-sm text-gray-600 font-bold">Total de Bautizados en el Año.: <span class="text-sm text-indigo-600 font-bold">{{ $totalBautizados}}</span></p>
                    <p class="text-sm text-gray-600 font-bold">Total Bautizados Menores a 1 Año.: <span class="text-sm text-indigo-600 font-bold">{{ $bautizadosMenordeUno}}</span></p>
                    <p class="text-sm text-gray-600 font-bold">Total Bautizados Entre 1 Año y 7 Años.:<span class="text-sm text-indigo-600 font-bold"> {{ $bautizadosUnoaSiete}}</span></p>
                    <p class="text-sm text-gray-600 font-bold">Total Bautizados Mayores a 7 Años.: <span class="text-sm text-indigo-600 font-bold">{{ $bautizadosMayorDeSiete}}</span> </p>
                    <p class="text-sm text-gray-600 font-bold">Total de Matrimonios en el Año.: <span class="text-sm text-indigo-600 font-bold">{{ $totalMatrimonios}}</span></p>
                </div> 

              <div class="flex flex-col md:flex-row items-stretch gap-3  mt-5 md:mt-0">
                  <a href="{{ route('menu.estadisticas.print',$anoCelebracion)}}" class="bg-slate-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center " target="_blank">
                      Imprimir
                  </a>

              </div>
      </div>
  </div>


</div>

@push('scripts')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
  Livewire.on('mostrarAlerta', bautismoId =>{
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
