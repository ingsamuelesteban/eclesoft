<div class="max-w-5xl mx-auto mt-6">
    <div class="flex flex-col md:flex-row gap-6">
        <!-- Columna izquierda: Info de caja y formulario -->
        <div class="md:w-1/2 w-full">
            @if($cajaId)
                <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mb-6">
                    <div class="flex justify-between items-center">
                        <div>
                            <span class="font-semibold text-blue-700">Caja No.:</span>
                            <span class="text-blue-900 font-bold">#{{ $cajaId }}</span>
                        </div>
                        <div>
                            <span class="font-semibold text-blue-700">Total en Caja:</span>
                            <span class="text-blue-900 font-bold">RD$ {{ number_format($total, 2) }}</span>
                        </div>
                                            <div class="mt-2">
                        <a href="{{ route('menu.caja.cierre', ['id' => $cajaId]) }}"
                           class="inline-block px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700 text-xs font-semibold transition">
                            Cerrar Caja
                        </a>
                    </div>
                    </div>
                    <div class="mt-2 text-xs text-blue-600">
                        Fondo inicial: RD$ {{ number_format($fondo, 2) }}
                    </div>

                    <div class="mt-2 flex flex-col sm:flex-row gap-2 text-sm">
                        <div class="text-green-700 font-semibold">
                            Ingresos: RD$ {{ number_format($ingresos, 2) }}
                        </div>
                        <div class="text-red-700 font-semibold">
                            Egresos: RD$ {{ number_format($egresos, 2) }}
                        </div>
                    </div>
                    <div class="mt-2 text-xs text-blue-600">
                        Ingresos por facturas: RD$ {{ number_format($ingresosFacturas, 2) }}
                    </div>
                </div>
            @endif

            <!-- Formulario para agregar movimiento -->
            <form wire:submit.prevent="agregarMovimiento" class="bg-white rounded-lg shadow p-4 mb-6">
                <h2 class="text-lg font-bold mb-4 text-gray-700">Agregar Movimiento</h2>
                <div class="mb-4">
                    <label class="block text-xs font-medium text-gray-500 uppercase tracking-wider mb-1">Motivo</label>
                    <input type="text" wire:model="motivo"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm text-gray-700 bg-white">
                    @error('motivo')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4" x-data="{
                    raw: @entangle('monto').defer,
                    get formatted() {
                        if(this.raw === '' || this.raw === null) return '';
                        let value = this.raw.toString().replace(/\D/g, '');
                        value = (parseInt(value, 10) / 100).toFixed(2);
                        return new Intl.NumberFormat('es-DO', { style: 'currency', currency: 'DOP' }).format(value);
                    },
                    set formatted(val) {
                        let num = val.replace(/\D/g, '');
                        this.raw = num ? (parseInt(num, 10) / 100).toFixed(2) : '';
                    }
                }">
                    <label class="block text-xs font-medium text-gray-500 uppercase tracking-wider mb-1">Monto</label>
                    <input type="text"
                        x-model="formatted"
                        inputmode="decimal"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm text-gray-700 bg-white"
                        placeholder="RD$ 0.00">
                    @error('monto')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-xs font-medium text-gray-500 uppercase tracking-wider mb-1">Tipo</label>
                    <select wire:model="tipo"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm text-gray-700 bg-white">
                        <option value="ingreso">Ingreso</option>
                        <option value="egreso">Egreso</option>
                    </select>
                    @error('tipo')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-xs font-medium text-gray-500 uppercase tracking-wider mb-1">
                        {{ $tipo === 'egreso' ? 'Entregado a:' : 'Recibido de:' }}
                    </label>
                    <input type="text" wire:model="persona"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm text-gray-700 bg-white">
                    @error('persona')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex justify-end">
                    <x-primary-button 
                        class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 font-semibold">
                        Agregar
                    </x-primary-button>
                </div>
            </form>

            @if($exito)
                <div class="bg-green-100 border border-green-300 text-green-800 rounded p-4 mb-4 flex flex-col sm:flex-row items-center justify-between gap-2">
                    <div class="font-semibold">¡Movimiento guardado!</div>
                    <div class="flex gap-2 mt-2 sm:mt-0">
                        @if($ultimoMovimientoId)
                            <a href="{{ route('caja.movimiento.recibo', $ultimoMovimientoId) }}"
                               target="_blank"
                               class="px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700 font-semibold">
                                Imprimir Recibo
                            </a>
                        @endif
                        <button wire:click="nuevoMovimiento"
                            class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 font-semibold">
                            Nuevo Movimiento
                        </button>
                    </div>
                </div>
            @endif
        </div>

        <!-- Columna derecha: Carrito de movimientos -->
        <div class="md:w-1/2 w-full">
            <div class="bg-white rounded-lg shadow p-4 h-full">
                <h3 class="text-lg font-bold mb-2">Movimientos</h3>
                @forelse($movimientos as $mov)
                    <div class="flex justify-between items-center border-b py-2">
                        <div>
                            <span class="font-semibold">
                                {{ $mov->tipo == 1 ? 'Ingreso' : 'Egreso' }}:
                            </span>
                            <span>{{ $mov->motivo }}</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="{{ $mov->tipo == 2 ? 'text-red-600' : 'text-green-600' }}">
                                {{ $mov->tipo == 2 ? '-' : '+' }}RD$ {{ number_format($mov->monto, 2) }}
                            </span>
                            <a href="{{ route('caja.movimiento.recibo', $mov->id) }}" target="_blank" title="Imprimir" class="text-indigo-600 hover:text-indigo-800">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9V2h12v7M6 18H4a2 2 0 01-2-2v-5a2 2 0 012-2h16a2 2 0 012 2v5a2 2 0 01-2 2h-2m-6 0v4m0 0h4m-4 0H8" />
                                </svg>
                            </a>
                        </div>
                    </div>
                @empty
                    <p class="text-gray-500 text-sm">No hay movimientos agregados.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>