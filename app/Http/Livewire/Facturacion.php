<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Impresione;
use Livewire\WithPagination;
use App\Models\Parroquia;
use App\Models\Factura;
use App\Models\CajaFactura;

class Facturacion extends Component
{
    public $nombre = '';
    public $fecha = '';
    public $seleccionados = [];
    public $mostrarModal = false;
    public $total = 0;
    public $monto_recibido = '';
    public $devuelta = null;
    public $facturaGuardada = false;
    public $facturaNumero = null;
    public $facturaDevuelta = null;

    use WithPagination;

    public function render()
    {
        $query = Impresione::query()->with(['Bautismo',  'Matrimonio', 'NoBautizado', 'Decreto', 'Decretosm'])
            ->where('pagada', false)
            ->orderBy('created_at', 'desc');

        if (!empty($this->nombre)) {
            $query->where(function ($query) {
                $query->whereHas('Bautismo', function ($q) {
                    $q->where('nombre', 'like', '%' . $this->nombre . '%');
                })
                ->orWhereHas('Matrimonio', function ($q) {
                    $q->where('nombre_esposa', 'like', '%' . $this->nombre . '%');
                })
                ->orWhereHas('Matrimonio', function ($q) {
                    $q->where('nombre_esposo', 'like', '%' . $this->nombre . '%');
                })
                ->orWhereHas('NoBautizado', function ($q) {
                    $q->where('nombre', 'like', '%' . $this->nombre . '%');
                })
                ->orWhereHas('Decreto', function ($q) {
                    $q->where('nombre', 'like', '%' . $this->nombre . '%');
                })
                ->orWhereHas('Decretosm', function ($q) {
                    $q->where('nombre_esposa', 'like', '%' . $this->nombre . '%')
                      ->orWhere('nombre_esposo', 'like', '%' . $this->nombre . '%');
                });
            });
        }

        if (!empty($this->fecha)) {
            $query->whereDate('created_at', $this->fecha);
        }

        $resultados = $query->orderBy('created_at')->paginate(4);

        // Obtén el precio_acta desde la tabla parroquias (primer registro)
        $parroquia = Parroquia::first();
        $precio_acta = $parroquia ? $parroquia->precio_acta : 0;

        // Calcula el total en base a los seleccionados y el precio
        $total = count($this->seleccionados) * $precio_acta;

        return view('livewire.facturacion', [
            'resultados' => $resultados,
            'precio_acta' => $precio_acta,
            'total' => $total,
        ]);
    }

    public function updatedSeleccionados()
    {
        // Esto se ejecuta cada vez que cambia la selección
    }

    public function guardarFactura()
    {
        // Calcula el total general
        $parroquia = Parroquia::first();
        $precio_acta = $parroquia ? $parroquia->precio_acta : 0;
        $total = count($this->seleccionados) * $precio_acta;

        // Calcula la devuelta
        $devuelta = $this->monto_recibido - $total;

        // Crea la factura
        $factura = Factura::create([
            'total'    => $total,
            'pago'     => $this->monto_recibido,
            'cambio'   => $devuelta,
            'user_id'  => auth()->id(),
        ]);

        // Actualiza los registros seleccionados en Impresione
        \App\Models\Impresione::whereIn('id', $this->seleccionados)
            ->update([
                'pagada' => true,
                'factura_id' => $factura->id,
            ]);

        // Calcular el monto de CajaFactura (solo los que NO son Decreto ni Decretosm)
        $impresiones = \App\Models\Impresione::whereIn('id', $this->seleccionados)->get();
        $montoCajaFactura = $impresiones->filter(function($impresion) {
            return !$impresion->decreto_id && !$impresion->decretom_id;
        })->count() * $precio_acta;

        // Crear registro en CajaFactura solo si el monto es mayor a 0
        $caja = auth()->user()->caja;
        if ($caja && $montoCajaFactura > 0) {
            \App\Models\CajaFactura::create([
                'caja_id'    => $caja->id,
                'factura_id' => $factura->id,
                'monto'      => $montoCajaFactura,
            ]);
        }

        session()->flash('message', 'Factura guardada exitosamente.');

        $this->facturaGuardada = true;
        $this->facturaNumero = $factura->id;
        $this->facturaDevuelta = $factura->cambio ?? $factura->devuelta ?? 0;

        $this->reset(['seleccionados', 'monto_recibido', 'devuelta']);
    }

    public function continuar()
    {
        $this->facturaGuardada = false;
        $this->facturaNumero = null;
        $this->facturaDevuelta = null;
        // Limpia otros campos si lo deseas
    }
}
