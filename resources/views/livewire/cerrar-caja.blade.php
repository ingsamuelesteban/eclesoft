@php $denominaciones = [2000, 1000, 500, 200, 100, 50, 25, 10, 5, 1]; @endphp
<div class="max-w-4xl mx-auto mt-8 bg-white rounded shadow p-6">
    <div class="flex flex-col md:flex-row gap-8">
        <!-- Columna izquierda: Desglose de efectivo -->
        <div class="md:w-1/2 w-full mb-6 md:mb-0">
            <h3 class="text-lg font-bold mb-4">Desglose de Efectivo</h3>
            <form @submit.prevent>
                <div class="space-y-2">
                    @foreach($denominaciones as $den)
                        <div class="flex items-center gap-2">
                            <label class="w-20 font-semibold text-gray-700">RD$ {{ $den }}</label>
                            <input
                                type="number"
                                min="0"
                                class="w-20 px-2 py-1 border rounded text-right"
                                placeholder="Cantidad"
                                wire:model="cant{{ $den }}"
                                wire:keydown.enter="recalcular"
                                onblur="if(this.value === '') this.value = 0"
                            >
                            <span class="w-24 text-right text-indigo-700 font-semibold">
                                RD$ {{ number_format($this->getSubtotal($den), 2) }}
                            </span>
                        </div>
                    @endforeach
                </div>
                <div class="mt-4 flex justify-between font-bold text-indigo-700">
                    <span>Total efectivo:</span>
                    <span>RD$ {{ number_format($this->totalEfectivo, 2) }}</span>
                </div>
            </form>
        </div>
        <!-- Columna derecha: Resumen de caja -->
        <div class="md:w-1/2 w-full">
            <h2 class="text-xl font-bold mb-4">Cierre de Caja #{{ $caja->id }}</h2>
            <div class="mb-2 flex justify-between">
                <span>Fondo:</span>
                <span class="font-semibold text-green-700">RD$ {{ number_format($fondo, 2) }}</span>
            </div>
            <div class="mb-2 flex justify-between">
                <span>Ingresos por facturas:</span>
                <span class="font-semibold text-green-700">RD$ {{ number_format($ingresosFacturas, 2) }}</span>
            </div>
            <div class="mb-2 flex justify-between">
                <span>Ingresos por movimientos:</span>
                <span class="font-semibold text-blue-700">RD$ {{ number_format($ingresosMovimientos, 2) }}</span>
            </div>
            <div class="mb-2 flex justify-between">
                <span>Egresos:</span>
                <span class="font-semibold text-red-700">RD$ {{ number_format($egresos, 2) }}</span>
            </div>
            <hr class="my-3">
            <div class="mb-2 flex justify-between text-lg">
                <span>Total general:</span>
                <span class="font-bold text-indigo-800">RD$ {{ number_format($totalGeneral, 2) }}</span>
            </div>
            @php
                $diferencia = $this->totalEfectivo - $totalGeneral;
                $esSobrante = $diferencia > 0;
                $esFaltante = $diferencia < 0;
            @endphp
            <div class="mb-2 flex justify-between text-lg">
                <span>
                    @if($esSobrante)
                        Sobrante:
                    @elseif($esFaltante)
                        Faltante:
                    @else
                        Diferencia:
                    @endif
                </span>
                <span class="font-bold {{ $esSobrante ? 'text-green-700' : ($esFaltante ? 'text-red-700' : 'text-indigo-700') }}">
                    RD$ {{ number_format(abs($diferencia), 2) }}
                </span>
            </div>
            <div class="mt-6 flex justify-end">
                <button
                    type="button"
                    class="px-6 py-2 bg-red-600 hover:bg-red-700 text-white font-bold rounded shadow transition"
                    wire:click="cerrarCaja({{ $caja->id }})"
                >
                    Cerrar Caja
                </button>
            </div>
        </div>
    </div>
</div>
