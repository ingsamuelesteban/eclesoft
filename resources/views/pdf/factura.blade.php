<?php
$medidaTicket = 200;
?>
@php use Illuminate\Support\Str; @endphp
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Factura #{{ $factura->id }}</title>
    <style>
        html, body {
            margin: 0 !important;
            padding: 0 !important;
            width: 100%;
            height: 100%;
        }
        * {
            font-size: 11px;
            font-family: 'DejaVu Sans', Arial, sans-serif;
            box-sizing: border-box;
        }
        h1 {
            font-size: 14px;
            margin-bottom: 2px;
        }
        .ticket {
            width: 72mm;
            max-width: 72mm;
            margin: 0;
            padding: 4px 2px;
        }
        .center {
            text-align: center;
        }
        .bold {
            font-weight: bold;
        }
        .mb-2 {
            margin-bottom: 4px;
        }
        .mb-1 {
            margin-bottom: 2px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 6px;
            table-layout: fixed;
        }
        th, td {
            padding: 1px 2px;
            word-break: break-word;
        }
        th {
            border-bottom: 1px dashed #222;
            font-size: 11px;
        }
        td {
            font-size: 11px;
        }
        .right {
            text-align: right;
        }
        .left {
            text-align: left;
        }
        .footer {
            margin-top: 10px;
            text-align: center;
            font-size: 11px;
        }
        .firma {
            margin-top: 24px;
        }
        hr {
            margin: 6px 0;
            border: none;
            border-top: 1px dashed #222;
        }
        /* Ajuste de columnas para ticket */
        .col-tipo { width: 30%; }      /* Aumenta el ancho para "Documento" */
        .col-nombre { width: 40%; }    /* Reduce el ancho para "Nombre" */
        .col-monto { width: 30%; }
    </style>
</head>
<body>
    <div class="ticket">
        <div class="center mb-2">
            <div class="bold" style="font-size: 13px;">
                {{ strtoupper($parroquia->parroquia ?? 'Parroquia') }}
            </div>
            <div class="mb-1">
                {{ $parroquia->diocesis ?? '' }}
            </div>
            <div class="mb-1">
                RNC: {{ $parroquia->rnc ?? '' }}
            </div>
            <div class="mb-1">
                {{ $parroquia->calle ?? '' }}
            </div>
            <div class="mb-2">
                Tel: {{ $parroquia->telefonop ?? '' }}
            </div>
        </div>
        <hr>
        <div class="left mb-1">
            <strong>Factura N°:</strong> {{ $factura->id }}<br>
            <strong>Fecha:</strong> {{ \Carbon\Carbon::parse($factura->created_at)->format('d/m/Y H:i') }}<br>
        </div>
        <hr>
        <table>
            <thead>
                <tr>
                    <th class="left col-tipo">Documento</th>
                    <th class="left col-nombre">Nombre(s)</th>
                    <th class="right col-monto">Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach($factura->impresiones as $i => $impresion)
                    <tr>
                        <td class="left col-tipo">
                            @if($impresion->Bautismo)
                                Bautismo
                            @elseif($impresion->Decreto)
                                Corección
                            @elseif($impresion->Decretosm)
                                Corección
                            @elseif($impresion->Matrimonio)
                                Matrimonio
                            @elseif($impresion->NoBautizado)
                                No Bautizado
                            @else
                                -
                            @endif
                        </td>
                        <td class="left col-nombre">
                            {{
                                optional($impresion->Bautismo)->nombre ??
                                optional($impresion->Decreto)->nombre ??
                                (
                                            optional($impresion->Decretosm)->nombre_esposo || optional($impresion->Decretosm)->nombre_esposa
                                                ? trim(
                                                    (optional($impresion->Decretosm)->nombre_esposo ? Str::before(optional($impresion->Decretosm)->nombre_esposo, ' ') : '') .
                                                    (optional($impresion->Decretosm)->nombre_esposo && optional($impresion->Decretosm)->nombre_esposa ? ' y ' : '') .
                                                    (optional($impresion->Decretosm)->nombre_esposa ? Str::before(optional($impresion->Decretosm)->nombre_esposa, ' ') : '')
                                                  )
                                                : null
                                ) ??
                                (
                                    optional($impresion->Matrimonio)->nombre_esposo || optional($impresion->Matrimonio)->nombre_esposa
                                        ? trim(
                                            (optional($impresion->Matrimonio)->nombre_esposo ? Str::before(optional($impresion->Matrimonio)->nombre_esposo, ' ') : '') .
                                            (optional($impresion->Matrimonio)->nombre_esposo && optional($impresion->Matrimonio)->nombre_esposa ? ' y ' : '') .
                                            (optional($impresion->Matrimonio)->nombre_esposa ? Str::before(optional($impresion->Matrimonio)->nombre_esposa, ' ') : '')
                                          )
                                        : null
                                ) ??
                                optional($impresion->NoBautizado)->nombre
                            }}
                        </td>
                        <td class="right col-monto">
                            RD$ {{ number_format($parroquia->precio_acta, 2) }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <hr>
        <table>
            <tr>
                <td class="left bold">Total:</td>
                <td class="right bold">RD$ {{ number_format($factura->total, 2) }}</td>
            </tr>
            <tr>
                <td class="left">Recibido:</td>
                <td class="right">RD$ {{ number_format($factura->pago ?? $factura->monto_recibido, 2) }}</td>
            </tr>
            <tr>
                <td class="left">Devuelta:</td>
                <td class="right">RD$ {{ number_format($factura->cambio ?? $factura->devuelta, 2) }}</td>
            </tr>
        </table>
        <div class="firma center">
            <strong>Sello</strong>
        </div>
    </div>
</body>
</html>