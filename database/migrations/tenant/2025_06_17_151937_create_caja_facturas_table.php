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
        Schema::create('caja_facturas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('caja_id')->nullable()->constrained('cajas');
            $table->foreignId('factura_id')->nullable()->constrained('facturas');
            $table->decimal('monto', 10, 2)->default(0);
            $table->integer('estado')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('caja_facturas');
    }
};
