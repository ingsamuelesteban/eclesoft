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
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('decretos', function (Blueprint $table) {
            $table->dropColumn(['bautismo_id','nombre', 'genero', 'fecha_nacimiento', 'lugar_nacimiento', 'nombre_madre', 'cedula_madre', 'nombre_padre', 'cedula_padre', 'nombre_madrina', 'nombre_padrino','nombre_civil', 'genero_civil', 'fecha_nacimiento_civil', 'lugar_nacimiento_civil', 'nombre_madre_civil', 'cedula_madre_civil', 'nombre_padre_civil', 'cedula_padre_civil', 'nombre_madrina_civil', 'nombre_padrino_civil']);
        });
    }
};
