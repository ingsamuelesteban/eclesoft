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
        Schema::table('bautismos', function (Blueprint $table) {
            //Aqui se agregan los campos 
            $table->string('nombre');
            $table->string('genero');
            $table->date('fecha_nacimiento');
            $table->string('lugar_nacimiento');
            $table->string('nombre_madre');
            $table->string('cedula_madre');
            $table->string('nombre_padre');
            $table->string('cedula_padre');
            $table->string('nombre_madrina');
            $table->string('nombre_padrino');
            $table->string('no_libro');
            $table->string('folio');
            $table->string('no_declaracion');
            $table->string('año');
            $table->string('circunscripcion');
            $table->string('oficialia');
            $table->string('parroquia');
            $table->string('ub_parroquia');
            $table->string('celebrante');
            $table->string('fecha_celebracion');
            $table->text('notas');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bautismos', function (Blueprint $table) {
            // Para eliminar las columans al aplicar rollback, deben agregarse todas
            $table->dropColumn(['nombre', 'genero', 'fecha_nacimiento', 'lugar_nacimiento', 'nombre_madre', 'cedula_madre', 'nombre_padre', 'cedula_padre', 'nombre_madrina', 'nombre_padrino', 'no_libro', 'folio', 'no_declaracion', 'año', 'circunscripcion', 'oficialia', 'parroquia', 'ub_parroquia', 'celebrante', 'fecha_celebracion', 'notas' ]);
        });
    }
};
