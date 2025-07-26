<?php
$medidaTicket = 240;
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        * {
            font-size: 12px;
            font-family: 'DejaVu Sans', serif;
        }
        h1 {
            font-size: 16px;
        }
        .ticket {
            margin: 2px;
        }
        th, td, tr, table {
            margin: 0 auto;
        }
        th.precio, td.precio {
            text-align: right;
            font-size: 11px;
        }
        th.descripcion, td.producto {
            text-align: left;
        }
        th {
            text-align: center;
        }
        .bt {
            border-top: 1px dashed black;
            border-collapse: collapse;
        }
        .bb {
            border-bottom: 1px dashed black;
            border-collapse: collapse;
        }
        .centrado {
            text-align: center;
            align-content: center;
        }
        .izquierda {
            text-align: left;
            align-content: left;
        }
        .descripcion {
            width: 100%;
        }
        .price {
            width: 30%
        }
        .ticket {
            width: <?php echo $medidaTicket ?>px;
            max-width: <?php echo $medidaTicket ?>px;
        }
        img {
            max-width: inherit;
            width: inherit;
        }
        * {
            margin: 0;
            padding: 0;
        }
        .ticket {
            margin: 0;
            padding: 0;
        }
        body {
            text-align: center;
        }
    </style>
    <title>
        @if($movimiento->tipo == 1)
            Recibo de Ingreso
        @else
            Recibo de Egreso
        @endif
        Caja #{{ $movimiento->id }}
    </title>
</head>
<body>
    <div class="ticket centrado">
        {{-- Espacio en blanco al inicio --}}
        <div style="height: 30px;"></div>

        {{-- Encabezado Parroquia --}}
        <h1>{{ strtoupper($parroquia->parroquia ?? 'Parroquia') }}</h1>
        <p>{{ $parroquia->diocesis ?? '' }}</p>
        <p>RNC: {{ $parroquia->rnc ?? '' }}</p>
        <p>{{ $parroquia->calle ?? '' }}</p>
        <p>{{ $parroquia->ciudad ?? '' }}, {{ $parroquia->provincia ?? '' }}</p>
        <p>{{ $parroquia->telefonop ?? '' }}</p>

        <div class="izquierda bb">
            <h3 class="bt" style="margin-bottom: 4px;">
                @if($movimiento->tipo == 1)
                    Recibo de Ingreso N°: {{ $movimiento->id }}
                @else
                    Recibo de Egreso N°: {{ $movimiento->id }}
                @endif
            </h3>
            <p>Fecha: {{ \Carbon\Carbon::parse($movimiento->created_at)->format('d/m/Y H:i') }}</p>
        </div>

        <table style="width:100%; table-layout: fixed;">
            <thead>
                <tr class="centrado">
                    <th class="descripcion" style="width:70%;">DESCRIPCIÓN</th>
                    <th class="precio" style="width:30%;">MONTO</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="producto" style="width:70%; word-break: break-word;">
                        <p>
                            {{ $movimiento->motivo }}<br>
                            <span>
                                @if($movimiento->tipo == 1)
                                    Recibido de: {{ $movimiento->persona }}
                                @else
                                    Entregado a: {{ $movimiento->persona }}
                                @endif
                            </span>
                        </p>
                    </td>
                    <td class="precio" style="width:30%;">
                        RD$ {{ number_format($movimiento->monto, 2) }}
                    </td>
                </tr>
            </tbody>
        </table>
        <br/>
        @if($movimiento->tipo == 1)
            <p class="centrado">¡DIOS LE PAGUE!</p>
        @endif
        <br/>
        <div style="height: 140px;"></div>
        <div class="izquierda" style="margin-top: 20px;">
            @if($movimiento->tipo == 1)
                <strong>Recibido por:</strong> {{ $movimiento->caja->user->name ?? '' }}
            @else
                <strong>Entregado por:</strong> {{ $movimiento->caja->user->name ?? '' }}
            @endif
        </div>
    </div>
</body>
</html>