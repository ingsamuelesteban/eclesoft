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
        Schema::create('impresiones', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('bautismo_id')->nullable()->constrained('bautismos');
            $table->foreignId('matrimonio_id')->nullable()->constrained('matrimonios');
            $table->foreignId('decreto_id')->nullable()->constrained('decretos')
            $table->foreignId('decretom_id')->nullable()->constrained('decretosm');
            $table->boolean('pagada')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('impresiones');
    }
};
