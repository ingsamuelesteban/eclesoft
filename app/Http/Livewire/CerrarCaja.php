<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Caja;
use App\Models\CajaFactura;
use App\Models\Cuadre;

class CerrarCaja extends Component
{
    public $caja;
    public $cajaId;
    public $ingresosFacturas = 0;
    public $ingresosMovimientos = 0;
    public $egresos = 0;
    public $totalGeneral = 0;

    public $cant2000 = 0;
    public $cant1000 = 0;
    public $cant500 = 0;
    public $cant200 = 0;
    public $cant100 = 0;
    public $cant50 = 0;
    public $cant25 = 0;
    public $cant10 = 0;
    public $cant5 = 0;
    public $cant1 = 0;

    public function mount($cajaId)
    {
        $this->cajaId = $cajaId;
        $this->caja = \App\Models\Caja::findOrFail($cajaId);

        //Fondo 
        $this->fondo = $this->caja->fondo;
        // Ingresos por facturas
        $this->ingresosFacturas = \App\Models\CajaFactura::where('caja_id', $cajaId)->sum('monto');

       
        // Ingresos y egresos por movimientos
        $this->ingresosMovimientos = $this->caja->CajaMovimiento->where('tipo', 1)->sum('monto');
        $this->egresos = $this->caja->CajaMovimiento->where('tipo', 2)->sum('monto');

        // Total general
        $this->totalGeneral = $this->ingresosFacturas + $this->ingresosMovimientos + $this->fondo - $this->egresos;
    }

    public function render()
    {
        return view('livewire.cerrar-caja');
    }

    public function cerrarCaja($cajaId)
    {
        $caja = Caja::findOrFail($cajaId);
        $caja->estado = 0; // Cambiar el estado a cerrado
        $caja->save();

        // Calcular el total del desglose en el backend
        $totalDesglose = 
            ((int) $this->cant2000 * 2000) +
            ((int) $this->cant1000 * 1000) +
            ((int) $this->cant500 * 500) +
            ((int) $this->cant200 * 200) +
            ((int) $this->cant100 * 100) +
            ((int) $this->cant50 * 50) +
            ((int) $this->cant25 * 25) +
            ((int) $this->cant10 * 10) +
            ((int) $this->cant5 * 5) +
            ((int) $this->cant1 * 1);

        // Crear un registro de cuadre
        Cuadre::create([
            'caja_id' => $cajaId,
            'user_id' => auth()->id(),
            'total_efectivo' => $this->totalGeneral,
            'total_desglose' => $totalDesglose,
            'diferencia' =>   $totalDesglose - $this->totalGeneral,
            'dosmil' => $this->cant2000,
            'mil' => $this->cant1000,
            'quinientos' => $this->cant500,
            'doscientos' => $this->cant200,
            'cien' => $this->cant100,
            'cincuenta' => $this->cant50,
            'veinticinco' => $this->cant25,
            'diez' => $this->cant10,
            'cinco' => $this->cant5,
            'uno' => $this->cant1,
        ]);

        session()->flash('success', 'Caja cerrada exitosamente.');
        return redirect()->route('menu.facturacion.cuadre.index');
    }

    public function getSubtotal($den)
    {
        return ((int) ($this->{'cant' . $den} ?? 0)) * $den;
    }

    public function getTotalEfectivoProperty()
    {
        $denominaciones = [2000, 1000, 500, 200, 100, 50, 25, 10, 5, 1];
        $total = 0;
        foreach ($denominaciones as $den) {
            $total += ((int) ($this->{'cant' . $den} ?? 0)) * $den;
        }
        return $total;
    }

    public function recalcular()
    {
        // No necesitas hacer nada si usas propiedades computadas,
        // pero puedes forzar el refresco del componente así:
        $this->emitSelf('$refresh');
    }
}
