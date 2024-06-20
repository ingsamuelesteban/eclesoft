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
        Schema::create('correccionbs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('parroquia_id')->nullable();
            $table->string('fecha_solicitud')->nullable();
            $table->string('bautizado')->nullable();
            $table->string('libro_bautismo')->nullable();
            $table->string('folio_bautismo')->nullable();
            $table->string('acta_bautismo')->nullable();
            $table->string('documento')->nullable();
            $table->string('titular_documento')->nullable();
            $table->string('referencias_documento')->nullable();
            $table->string('notas', length: 2000)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('correccionbs');
    }
};
