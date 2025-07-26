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
        Schema::create('cuadres', function (Blueprint $table) {
            $table->id();
            $table->foreignId('caja_id')->nullable()->constrained('cajas');
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->foreignId('caja_factura_id')->nullable()->constrained('caja_facturas');
            $table->decimal('tarjeta',10,2)->default(0)->nullable();
            $table->decimal('cheque',10,2)->default(0)->nullable();
            $table->decimal('transferencia',10,2)->default(0)->nullable();
            $table->integer('dosmil')->default(0)->nullable();
            $table->integer('mil')->default(0)->nullable();
            $table->integer('quinientos')->default(0)->nullable();
            $table->integer('doscientos')->default(0)->nullable();
            $table->integer('cien')->default(0)->nullable();
            $table->integer('cincuenta')->default(0)->nullable();
            $table->integer('veinticinco')->default(0)->nullable();
            $table->integer('diez')->default(0)->nullable();
            $table->integer('cinco')->default(0)->nullable();
            $table->integer('uno')->default(0)->nullable();
            $table->decimal('diferencia',10,2)->default(0)->nullable();
            $table->foreignId('caja_movimientos_id')->nullable()->constrained('caja_movimientos');
            $table->integer('total_efectivo')->default(0)->nullable();
            $table->integer('total_desglose')->default(0)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuadres');
    }
};
