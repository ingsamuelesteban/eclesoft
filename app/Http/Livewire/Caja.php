<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\CajaMovimiento;
use Illuminate\Support\Facades\Auth;

class Caja extends Component
{
    public $mostrarModalMovimiento = false;
    public $motivo = '';
    public $monto = '';
    public $tipo = 'ingreso';
    public $exito = false;
    public $ultimoMovimientoId = null;
    public $persona = '';

    

    public function agregarMovimiento()
    {
        $this->validate([
            'motivo' => 'required|string',
            'monto' => 'required|numeric|min:0.01',
            'tipo' => 'required|in:ingreso,egreso',
            'persona' => 'nullable|string|max:255',
        ]);

        $caja = auth()->user()->caja;
        if (!$caja) {
            session()->flash('error', 'No tienes una caja abierta.');
            return;
        }

        $tipoNumerico = $this->tipo === 'ingreso' ? 1 : 2;

        $movimiento = \App\Models\CajaMovimiento::create([
            'motivo' => $this->motivo,
            'monto' => $this->monto,
            'tipo' => $tipoNumerico,
            'estado' => 1,
            'caja_id' => $caja->id, 
            'persona' => $this->persona,
        ]);

        $this->reset(['motivo', 'monto', 'tipo']);
        $this->exito = true;
        $this->ultimoMovimientoId = $movimiento->id;
    }

    public function nuevoMovimiento()
    {
        $this->exito = false;
        $this->reset(['motivo', 'monto', 'tipo', 'persona']);
    }

    // Puedes agregar un método para imprimir recibo si lo necesitas
    public function imprimirRecibo()
    {
        // Lógica para imprimir recibo, por ejemplo redirigir a una ruta PDF
        return redirect()->route('caja.movimiento.recibo', $this->ultimoMovimientoId);
    }

    public function render()
    {
        $caja = auth()->user()->caja;
        $movimientos = $caja
            ? \App\Models\CajaMovimiento::where('caja_id', $caja->id)->latest()->get()
            : collect();

        // Suma de ingresos por facturas
        $ingresosFacturas = $caja
            ? \App\Models\CajaFactura::where('caja_id', $caja->id)->sum('monto')
            : 0;

        $ingresos = $movimientos->where('tipo', 1)->sum('monto');
        $egresos = $movimientos->where('tipo', 2)->sum('monto');
        $fondo = $caja ? $caja->fondo : 0;
        $total = $fondo + $ingresos + $ingresosFacturas - $egresos;
        $cajaId = $caja ? $caja->id : null;



        return view('livewire.caja', compact(
            'movimientos', 'cajaId', 'total', 'fondo', 'ingresos', 'egresos', 'ingresosFacturas'
        ));
    }
}
