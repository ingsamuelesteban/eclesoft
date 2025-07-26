<form wire:submit.prevent="guardarFactura">
    <div class="p-4 bg-white shadow rounded">
        <div class="flex flex-col md:flex-row gap-6 mb-4">
            <!-- Columna izquierda: Formulario de pago -->
            <div class="md:w-1/4 w-full flex flex-col gap-4">
                <h2 class="text-lg font-bold mb-4 text-gray-700">Pago en efectivo</h2>
                <div class="mb-4">
                    <label class="block text-xs font-medium text-gray-500 uppercase tracking-wider mb-1">
                        Total a facturar
                    </label>
                    <input type="text" readonly
                        value="RD$ {{ number_format(count($seleccionados) * $precio_acta, 2) }}"
                        class="w-full px-4 py-2 border border-blue-300 rounded-md shadow-sm bg-blue-50 text-sm text-blue-700 text-right font-semibold">
                </div>
                <div 
                    x-data="{
                        raw: @entangle('monto_recibido'),
                        total: {{ count($seleccionados) * $precio_acta }},
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
                    }"
                    x-effect="total = $refs.totalInput.value"
                >
                    <!-- input oculto para que Alpine observe el total actualizado -->
                    <input type="hidden" x-ref="totalInput" value="{{ count($seleccionados) * $precio_acta }}">
                    <div class="mb-4">
                        <label for="monto_recibido" class="block text-xs font-medium text-gray-500 uppercase tracking-wider mb-1">
                            Monto recibido
                        </label>
                        <input type="text"
                            x-model="formatted"
                            inputmode="decimal"
                            id="monto_recibido"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-200 focus:border-blue-400 text-sm text-gray-700 bg-white"
                            placeholder="RD$ 0.00">
                    </div>
                </div>
                <div>
                    <x-primary-button type="submit"
                        :disabled="count($seleccionados) == 0 || $monto_recibido < (count($seleccionados) * $precio_acta)"
                        class="w-full flex items-center justify-center"
                    >
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                        </svg>
                        Guardar Factura
                    </x-primary-button>
                </div>

                {{-- MENSAJE DE FACTURA GUARDADA --}}
                @if($facturaGuardada)
                    <div class="bg-green-100 border border-green-300 text-green-800 rounded p-4 mt-4 flex flex-col gap-2">
                        <div>
                            <span class="font-semibold">Factura #{{ $facturaNumero }} guardada.</span>
                            <span class="ml-2">Devuelta: <strong>RD$ {{ number_format($facturaDevuelta, 2) }}</strong></span>
                        </div>
                        <div class="flex gap-2 mt-2">
                            <button type="button" wire:click="continuar" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 font-semibold">
                                Continuar
                            </button>
                            <a href="{{ route('menu.facturacion.imprimir', $facturaNumero) }}" target="_blank"
                               class="px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700 font-semibold">
                                Imprimir Factura
                            </a>
                        </div>
                    </div>
                @endif
                {{-- FIN MENSAJE --}}
            </div>
            <!-- Columna derecha: filtros y tabla -->
            <div class="md:w-3/4 w-full">
                <div class="flex flex-col md:flex-row md:items-end gap-2 md:gap-4 mb-4">
                    <div class="flex-1 min-w-[150px]">
                        <label for="nombre" class="block text-xs font-medium text-gray-500 uppercase tracking-wider mb-1">
                            Nombre
                        </label>
                        <input type="text" id="nombre" wire:model="nombre"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-200 focus:border-blue-400 text-sm text-gray-700 bg-white"
                            placeholder="Buscar nombre">
                    </div>
                    <div class="flex-1 min-w-[180px]">
                        <label for="fecha" class="block text-xs font-medium text-gray-500 uppercase tracking-wider mb-1">
                            Fecha de expedición
                        </label>
                        <input type="date" id="fecha" wire:model="fecha"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-200 focus:border-blue-400 text-sm text-gray-700 bg-white">
                    </div>
                    <div class="flex-1"></div>
                </div>
                @php use Illuminate\Support\Str; @endphp
                <table class="min-w-full divide-y divide-gray-200 rounded-lg overflow-hidden shadow-sm">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-4 py-4"></th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Nombre(s)
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Tipo
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Fecha de expedición
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($resultados as $registro)
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-4">
                                    <input type="checkbox" wire:model="seleccionados" value="{{ $registro->id }}" class="form-checkbox h-4 w-4 text-blue-600">
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                    {{
                                        optional($registro->Bautismo)->nombre ??
                                        optional($registro->Decreto)->nombre ??
                                        (
                                            optional($registro->Decretosm)->nombre_esposo || optional($registro->Decretosm)->nombre_esposa
                                                ? trim(
                                                    (optional($registro->Decretosm)->nombre_esposo ? Str::before(optional($registro->Decretosm)->nombre_esposo, ' ') : '') .
                                                    (optional($registro->Decretosm)->nombre_esposo && optional($registro->Decretosm)->nombre_esposa ? ' y ' : '') .
                                                    (optional($registro->Decretosm)->nombre_esposa ? Str::before(optional($registro->Decretosm)->nombre_esposa, ' ') : '')
                                                  )
                                                : null
                                        ) ??
                                        (
                                            optional($registro->Matrimonio)->nombre_esposo || optional($registro->Matrimonio)->nombre_esposa
                                                ? trim(
                                                    (optional($registro->Matrimonio)->nombre_esposo ? Str::before(optional($registro->Matrimonio)->nombre_esposo, ' ') : '') .
                                                    (optional($registro->Matrimonio)->nombre_esposo && optional($registro->Matrimonio)->nombre_esposa ? ' y ' : '') .
                                                    (optional($registro->Matrimonio)->nombre_esposa ? Str::before(optional($registro->Matrimonio)->nombre_esposa, ' ') : '')
                                                  )
                                                : null
                                        ) ??
                                        optional($registro->NoBautizado)->nombre
                                    }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                    @if($registro->Bautismo)
                                        Bautismo
                                    @elseif($registro->Decreto)
                                        Decreto
                                    @elseif($registro->Decretosm)
                                        Decreto
                                    @elseif($registro->Matrimonio)
                                        Matrimonio
                                    @elseif($registro->NoBautizado)
                                        No Bautizado
                                    @else
                                        -
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                    {{ $registro->created_at->format('d/m/Y') }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-4">
                    {{ $resultados->links() }}
                </div>
            </div>
        </div>
    </div>
</form>