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
        Schema::table('no_bautizados', function (Blueprint $table) {
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
        Schema::table('no_bautizados', function (Blueprint $table) {
            $table->dropColumn('nombre');
            $table->dropColumn('genero');
            $table->dropColumn('fecha_nacimiento');
            $table->dropColumn('nombre_padre');
            $table->dropColumn('cedula_padre');
            $table->dropColumn('nombre_madre');
            $table->dropColumn('cedula_madre');
            $table->dropColumn('hospital');
            $table->dropColumn('escuela');
            $table->dropColumn('docmadre');
            $table->dropColumn('docpadre');
            $table->dropColumn('notas');
        });
    }
};
