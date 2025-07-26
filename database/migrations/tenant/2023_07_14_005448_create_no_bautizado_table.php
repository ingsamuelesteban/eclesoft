<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('no_bautizados', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre');
            $table->string('genero');
            $table->string('fecha_nacimiento');
            $table->string('nombre_padre');
            $table->string('cedula_padre');
            $table->string('nombre_madre');
            $table->string('cedula_madre');
            $table->string('hospital')->nullable();
            $table->string('escuela')->nullable();
            $table->string('docmadre')->nullable();
            $table->string('docpadre')->nullable();
            $table->string('notas')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('no_bautizados');
    }
};
