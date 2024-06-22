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
