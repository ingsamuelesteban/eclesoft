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
        Schema::create('decretosm', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('matrimonio_id')->nullable();
            $table->string('nombre_esposa')->nullable();
            $table->string('nombre_esposa_civil')->nullable();
            $table->string('cedula_esposa')->nullable();
            $table->string('cedula_esposa_civil')->nullable();
            $table->string('nombre_esposo')->nullable();
            $table->string('nombre_esposo_civil')->nullable();
            $table->string('cedula_esposo')->nullable();
            $table->string('cedula_esposo_civil')->nullable();
            $table->string('fecha_nacimiento_esposa')->nullable();
            $table->string('fecha_nacimiento_esposa_civil')->nullable();
            $table->string('fecha_nacimiento_esposo')->nullable();
            $table->string('fecha_nacimiento_esposo_civil')->nullable();
            $table->string('lugar_nacimiento_esposa')->nullable();
            $table->string('lugar_nacimiento_esposa_civil')->nullable();
            $table->string('lugar_nacimiento_esposo')->nullable();
            $table->string('lugar_nacimiento_esposo_civil')->nullable();
            $table->string('nombre_madre_esposa')->nullable();
            $table->string('nombre_madre_esposa_civil')->nullable();
            $table->string('nombre_madre_esposo')->nullable();
            $table->string('nombre_madre_esposo_civil')->nullable();
            $table->string('nombre_padre_esposa')->nullable();
            $table->string('nombre_padre_esposa_civil')->nullable();
            $table->string('nombre_padre_esposo')->nullable();
            $table->string('nombre_padre_esposo_civil')->nullable();
            $table->string('nombre_madrina')->nullable();
            $table->string('nombre_madrina_civil')->nullable();
            $table->string('cedula_madrina')->nullable();
            $table->string('cedula_madrina_civil')->nullable();
            $table->string('nombre_padrino')->nullable();
            $table->string('nombre_padrino_civil')->nullable();
            $table->string('cedula_padrino')->nullable();
            $table->string('cedula_padrino_civil')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('decretosm', function (Blueprint $table){
            $table->dropColumn(
                'matrimonio_id',
                'nombre_esposa',
                'nombre_esposa_civil',
                'cedula_esposa',
                'cedula_esposa_civil',
                'nombre_esposo',
                'nombre_esposo_civil',
                'cedula_esposo',
                'cedula_esposo_civil',
                'fecha_nacimiento_esposa',
                'fecha_nacimiento_esposa_civil',
                'fecha_nacimiento_esposo',
                'fecha_nacimiento_esposo_civil',
                'lugar_nacimiento_esposa',
                'lugar_nacimiento_esposa_civil',
                'lugar_nacimiento_esposo',
                'lugar_nacimiento_esposo_civil',
                'nombre_madre_esposa',
                'nombre_madre_esposa_civil',
                'nombre_madre_esposo',
                'nombre_madre_esposo_civil',
                'nombre_padre_esposa',
                'nombre_padre_esposa_civil',
                'nombre_padre_esposo',
                'nombre_padre_esposo_civil',
                'nombre_madrina',
                'nombre_madrina_civil',
                'cedula_madrina',
                'cedula_madrina_civil',
                'nombre_padrino',
                'nombre_padrino_civil',
                'cedula_padrino',
                'cedula_padrino_civil',
            );
        });

    }
};
