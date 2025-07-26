<!-- filepath: c:\Users\ingsa\Desktop\eclesoft\resources\views\pdf\cuadre.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle de Cuadre de Caja</title>
    <style>
        @page {
            size: 204.09pt 425.20pt;
            margin: 0;
        }
        html, body {
            width: 204pt;
            max-width: 204pt;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: Arial, sans-serif;
            font-size: 11px;
            width: 100%;
            height: 100%;
        }
        .encabezado {
            text-align: center;
            margin-bottom: 8px;
        }
        .tabla {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 10px;
        }
        .tabla th, .tabla td {
            border: 1px solid #333;
            padding: 2px 4px;
            text-align: left;
        }
        .tabla th {
            background: #f3f3f3;
        }
        h2, h3, h4 {
            margin: 2px 0 2px 0;
            font-size: 13px;
        }
        .resumen { margin-top: 10px; }
    </style>
</head>
<body>
    <div class="encabezado">
        <h2>{{ $parroquia->parroquia ?? 'Parroquia' }}</h2>
        <div>{{ $parroquia->direccion ?? '' }}</div>
        <div>Tel: {{ $parroquia->telefono ?? '' }}</div>
        <div>RNC: {{ $parroquia->rnc ?? '' }}</div>
        <h3>Detalle de Cuadre de Caja</h3>
        <div>Fecha: {{ $cuadre->created_at->format('d/m/Y H:i') }}</div>
    </div>

    <table class="tabla">
        <tr>
            <th>Caja</th>
            <td>{{ $cuadre->caja_id }}</td>
            <th>Usuario</th>
            <td>{{ $cuadre->user->name ?? 'N/A' }}</td>
        </tr>
        <tr>
            <th>Total Efectivo</th>
            <td colspan="3">RD$ {{ number_format($cuadre->total_efectivo, 2) }}</td>
        </tr>
        <tr>
            <th>Total Desglose</th>
            <td colspan="3">RD$ {{ number_format($cuadre->total_desglose, 2) }}</td>
        </tr>
        <tr>
            <th>Diferencia</th>
            <td colspan="3">RD$ {{ number_format($cuadre->diferencia, 2) }}</td>
        </tr>
    </table>

    <h4>Desglose por Denominación</h4>
    <table class="tabla">
        <thead>
            <tr>
                <th>Denom.</th>
                <th>Cant.</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>RD$ 2000</td>
                <td>{{ $cuadre->dosmil }}</td>
                <td>RD$ {{ number_format($cuadre->dosmil * 2000, 2) }}</td>
            </tr>
            <tr>
                <td>RD$ 1000</td>
                <td>{{ $cuadre->mil }}</td>
                <td>RD$ {{ number_format($cuadre->mil * 1000, 2) }}</td>
            </tr>
            <tr>
                <td>RD$ 500</td>
                <td>{{ $cuadre->quinientos }}</td>
                <td>RD$ {{ number_format($cuadre->quinientos * 500, 2) }}</td>
            </tr>
            <tr>
                <td>RD$ 200</td>
                <td>{{ $cuadre->doscientos }}</td>
                <td>RD$ {{ number_format($cuadre->doscientos * 200, 2) }}</td>
            </tr>
            <tr>
                <td>RD$ 100</td>
                <td>{{ $cuadre->cien }}</td>
                <td>RD$ {{ number_format($cuadre->cien * 100, 2) }}</td>
            </tr>
            <tr>
                <td>RD$ 50</td>
                <td>{{ $cuadre->cincuenta }}</td>
                <td>RD$ {{ number_format($cuadre->cincuenta * 50, 2) }}</td>
            </tr>
            <tr>
                <td>RD$ 25</td>
                <td>{{ $cuadre->veinticinco }}</td>
                <td>RD$ {{ number_format($cuadre->veinticinco * 25, 2) }}</td>
            </tr>
            <tr>
                <td>RD$ 10</td>
                <td>{{ $cuadre->diez }}</td>
                <td>RD$ {{ number_format($cuadre->diez * 10, 2) }}</td>
            </tr>
            <tr>
                <td>RD$ 5</td>
                <td>{{ $cuadre->cinco }}</td>
                <td>RD$ {{ number_format($cuadre->cinco * 5, 2) }}</td>
            </tr>
            <tr>
                <td>RD$ 1</td>
                <td>{{ $cuadre->uno }}</td>
                <td>RD$ {{ number_format($cuadre->uno * 1, 2) }}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>