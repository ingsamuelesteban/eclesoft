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
        Schema::table('decretos', function (Blueprint $table) {
            $table->string('bautismo_id')->nullable();
            $table->string('nombre')->nullable();
            $table->string('genero')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('lugar_nacimiento')->nullable();
            $table->string('nombre_madre')->nullable();
            $table->string('cedula_madre')->nullable();
            $table->string('nombre_padre')->nullable();
            $table->string('cedula_padre')->nullable();
            $table->string('nombre_madrina')->nullable();
            $table->string('nombre_padrino')->nullable();
            $table->string('nombre_civil')->nullable();
            $table->string('genero_civil')->nullable();
            $table->date('fecha_nacimiento_civil')->nullable();
            $table->string('lugar_nacimiento_civil')->nullable();
            $table->string('nombre_madre_civil')->nullable();
            $table->string('cedula_madre_civil')->nullable();
            $table->string('nombre_padre_civil')->nullable();
            $table->string('cedula_padre_civil')->nullable();
            $table->string('nombre_madrina_civil')->nullable();
            $table->string('nombre_padrino_civil')->nullable();
            $table->string('libro_nacimiento')->nullable();
            $table->string('folio_nacimiento')->nullable();
            $table->string('acta_nacimiento')->nullable();
            $table->string('ano_nacimiento')->nullable();
            $table->string('circunscripcion_nacimiento')->nullable();
            $table->string('libro_nacimiento_civil')->nullable();
            $table->string('folio_nacimiento_civil')->nullable();
            $table->string('acta_nacimiento_civil')->nullable();
            $table->string('ano_nacimiento_civil')->nullable();
            $table->string('circunscripcion_nacimiento_civil')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('decretos', function (Blueprint $table) {
            //
        });
    }
};
