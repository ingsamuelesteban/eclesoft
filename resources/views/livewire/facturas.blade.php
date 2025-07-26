<div>
    <h1 class="text-xl font-bold mb-4">Facturas</h1>
    <table class="min-w-full bg-white border rounded shadow">
        <thead>
            <tr>
                <th class="px-4 py-2 border">Fecha</th>
                <th class="px-4 py-2 border">Número</th>
                <th class="px-4 py-2 border">Tipo de Documento</th>
                <th class="px-4 py-2 border">Nombre</th>
                <th class="px-4 py-2 border">Total</th>
                <th class="px-4 py-2 border text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($facturas as $factura)
                @php
                    $tipos = [];
                    $nombres = [];
                    foreach ($factura->impresiones as $impresion) {
                        if ($impresion->bautismo_id) {
                            $tipos[] = 'Bautismo';
                            $nombres[] = $impresion->Bautismo->nombre ?? '';
                        } elseif ($impresion->decreto_id) {
                            $tipos[] = 'Decreto';
                            $nombres[] = $impresion->Decreto->nombre ?? '';
                        } elseif ($impresion->decretom_id) {
                            $tipos[] = 'Decreto Matrimonio';
                            $esposo = $impresion->Decretosm->nombre_esposo ?? '';
                            $esposa = $impresion->Decretosm->nombre_esposa ?? '';
                            $nombres[] = trim(Str::before($esposo, ' ')) . ' y ' . trim(Str::before($esposa, ' '));
                        } elseif ($impresion->matrimonio_id) {
                            $tipos[] = 'Matrimonio';
                            $esposo = $impresion->Matrimonio->nombre_esposo ?? '';
                            $esposa = $impresion->Matrimonio->nombre_esposa ?? '';
                            $nombres[] = trim(Str::before($esposo, ' ')) . ' y ' . trim(Str::before($esposa, ' '));
                        } elseif ($impresion->no_bautizado_id) {
                            $tipos[] = 'No Bautizado';
                            $nombres[] = $impresion->NoBautizado->nombre ?? '';
                        } else {
                            $tipos[] = 'Otro';
                            $nombres[] = '';
                        }
                    }
                @endphp
                <tr>
                    <td class="px-4 py-2 border">{{ $factura->created_at->format('d/m/Y H:i') }}</td>
                    <td class="px-4 py-2 border">{{ $factura->numero ?? $factura->id }}</td>
                    <td class="px-4 py-2 border">{{ implode(', ', array_filter($tipos)) }}</td>
                    <td class="px-4 py-2 border">{{ implode(', ', array_filter($nombres)) }}</td>
                    <td class="px-4 py-2 border">RD$ {{ number_format($factura->total, 2) }}</td>
                    <td class="px-4 py-2 border text-center">
                        <a href="#" title="Ver" class="inline-block text-blue-600 hover:text-blue-800 mx-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0zm-9 0a9 9 0 0118 0 9 9 0 01-18 0z" />
                            </svg>
                        </a>
                        <a href="{{ route('menu.facturacion.imprimir', $factura->id) }}" title="Imprimir" class="inline-block text-green-600 hover:text-green-800 mx-1" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9V2h12v7M6 18H4a2 2 0 01-2-2v-5a2 2 0 012-2h16a2 2 0 012 2v5a2 2 0 01-2 2h-2m-6 0v4m0 0h4m-4 0H8" />
                            </svg>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
