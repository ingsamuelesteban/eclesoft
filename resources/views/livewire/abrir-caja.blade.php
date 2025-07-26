<div class="flex flex-col items-center justify-center min-h-[200px]">
    <x-input-label for="monto" value="{{ __('Monto') }}" />
    <x-text-input id="monto" type="number" class="mt-1 block w-50%" wire:model.defer="monto" />
    @error('monto')
        <livewire:mostrar-alertas :message="$message" />
    @enderror

    <div class="mt-4">
        <x-primary-button wire:click="abrirCaja">Abrir Caja</x-primary-button>
    </div>
</div>
