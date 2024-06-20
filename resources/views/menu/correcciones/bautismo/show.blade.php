<x-app-layout>
    @include('menu.correcciones.bautismo.navigation');
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Decretos de Bautismo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if (session()->has('mensaje'))
            <div class="uppercase border border-green-600 bg-green-100 text-green-600 font-bold p-2 my-3 text-sm">
              {{ session('mensaje')}} 
          </div>
        @endif
      
            
        
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg " >
                <div class="p-10">
                    <div class="mb-5">
                        <p class="text-md text-black text-center my-5 font-serif">Vistos los siguientes documentos:</p>

                        <ol class="list-decimal space-y-2 list-inside">
                        <li class="text-md text-black text-justify font-serif">Solicitud del Párroco de la Parroquia {{$correccionb->parroquia->parroquia}}, fechada el {{Carbon\Carbon::parse($correccionb->fecha_solicitud)->isoFormat('LL')}}.</li>

                        <li class="text-md text-black text-justify font-serif">Certificado de Bautismo de <span class="font-bold uppercase">{{$correccionb->bautizado}}</span> Libro {{$correccionb->libro_bautismo}} Folio {{$correccionb->folio_bautismo}} No. {{$correccionb->acta_bautismo}}.</li>

                        @foreach ($documentos as $documento )

                        <li class="text-md text-black text-justify font-serif">{{$documento->documento}} de <span class="uppercase font-bold">{{$documento->titular_documento}}</span> {{$documento->referencias_documento}}</li>
                    
                        @endforeach
                    </ol>

                    <p class="text-md text-black text-center my-5 font-serif">Por el presente DECRETAMOS que:</p>

                    <p class="text-md text-black text-justify my-2 font-serif">El Párroco de la Parroquia {{$correccionb->parroquia->parroquia}} en el Libro {{$correccionb->libro_bautismo}} folio{{$correccionb->folio_bautismo}} No. {{$correccionb->acta_bautismo}} coloque una nota que diga: </p>

                    <p class="text-md text-black text-justify my-2 font-serif">{{$correccionb->notas}}</p>
                   
                    @foreach ($diocesi as $diocesi )
                        
                        @endforeach
                    <div class="md:flex md:justify-center p-5">
                        <livewire:show-correccionb
                        :diocesi="$diocesi"/>
                    </div>
                   
                    
                    <div class="flex flex-col md:flex-row items-stretch gap-3  mt-5 md:mt-0">
                        <a href="{{ route('menu.correccionesb.print', $correccionb->id)}}" class="bg-slate-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center " target="_blank">
                            Imprimir
                        </a>
    
                        <a href="{{ route('menu.correccionesb.edit', $correccionb->id)}}" class="bg-blue-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center ">
                            Editar
                        </a>
                    </div> 
                </div>
            </div>
        </div>
    </div>
   
</x-app-layout>