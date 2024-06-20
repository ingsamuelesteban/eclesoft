<form class="md:w-50% space-y-5" wire:submit.prevent='cambiarFirma'>

    @foreach ($diocesi as $diocesi )
        
    @endforeach
    
    <div>
        <x-input-label for="firma" :value="__('firma actual.:')" />

        <select wire:model="firma" id="firma" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full">
            <option value="">Seleccione</option>
            <option value="1">{{$diocesi->obispo}}</option>
            <option value="2">{{$diocesi->vicario_general}}</option>
            <option value="3">{{$diocesi->canciller}}</option>
        </select>
        @error('firma')
            <livewire:mostrar-alertas :message="$message" />
        @enderror
    </div>
    <x-primary-button class="w-full justify-center">
        {{ __('Cambiar Firma') }}
    </x-primary-button>
    
 </form>