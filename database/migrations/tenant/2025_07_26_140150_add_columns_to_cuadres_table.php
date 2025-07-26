<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (!Schema::hasColmn ('cuadres', 'caja_factura_id')) {
            Schema::table('cuadres', function (Blueprint $table) {
                $table->foreignId('caja_factura_id')->nullable()->constrained('caja_facturas');
            });
        }
        if (!Schema::hasColumn('cuadres', 'caja_movimientos_id')) {
            Schema::table('cuadres', function (Blueprint $table) {
                $table->foreignId('caja_movimientos_id')->nullable()->constrained('caja_movimientos');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cuadres', function (Blueprint $table) {
            //
        });
    }
};
