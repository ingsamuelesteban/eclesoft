<div>
    <h1 class="text-xl font-bold mb-4">Cierres de Caja</h1>
    <table class="min-w-full bg-white border rounded shadow">
        <thead>
            <tr>
                <th class="px-4 py-2 border">Fecha</th>
                <th class="px-4 py-2 border">Caja</th>
                <th class="px-4 py-2 border">Usuario</th>
                <th class="px-4 py-2 border">Total Efectivo</th>
                <th class="px-4 py-2 border">Total Desglose</th>
                <th class="px-4 py-2 border">Diferencia</th>
                <th class="px-4 py-2 border text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cuadres as $cuadre)
                <tr>
                    <td class="px-4 py-2 border">{{ $cuadre->created_at->format('d/m/Y H:i') }}</td>
                    <td class="px-4 py-2 border">{{ $cuadre->caja_id }}</td>
                    <td class="px-4 py-2 border">{{ $cuadre->user->name ?? 'N/A' }}</td>
                    <td class="px-4 py-2 border">RD$ {{ number_format($cuadre->total_efectivo, 2) }}</td>
                    <td class="px-4 py-2 border">RD$ {{ number_format($cuadre->total_desglose, 2) }}</td>
                    <td class="px-4 py-2 border">RD$ {{ number_format($cuadre->diferencia, 2) }}</td>
                    <td class="px-4 py-2 border text-center">
                        <!-- Botón Ver -->
                        <a href="#" title="Ver" class="inline-flex items-center px-2 py-1 text-xs text-blue-600 hover:text-blue-800" wire:click="ver({{ $cuadre->id }})">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0zm-9 0a9 9 0 0118 0 9 9 0 01-18 0z" />
                            </svg>
                        </a>
                        <!-- Botón Imprimir -->
                        <a href="{{ route('cuadre.imprimir', $cuadre->id) }}" target="_blank" title="Imprimir" class="inline-flex items-center px-2 py-1 text-xs text-green-600 hover:text-green-800" >
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9V2h12v7M6 18H4a2 2 0 01-2-2v-5a2 2 0 012-2h16a2 2 0 012 2v5a2 2 0 01-2 2h-2m-6 0v4m0 0h4m-4 0H8" />
                            </svg>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
