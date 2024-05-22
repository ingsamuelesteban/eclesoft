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
        Schema::table('matrimonios', function (Blueprint $table) {
            $table->string('libro_matrimonio');
            $table->string('folio_matrimonio');
            $table->string('no_matrimonio');
            $table->string('fecha_celebracion');
            $table->string('celebrante_name');
            $table->string('nombre_esposo');
            $table->string('documento_esposo');
            $table->string('nombre_esposa');
            $table->string('documento_esposa');
            $table->string('nombre_padrino');
            $table->string('documento_padrino');
            $table->string('nombre_madrina');
            $table->string('documento_madrina');
            $table->string('fecha_transcripcion');
            $table->string('no_libro');
            $table->string('folio');
            $table->string('no_transcripcion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('matrimonios', function (Blueprint $table) {
            $table->dropColumn('libro_matrimonio');
            $table->dropColumn('folio_matrimonio');
            $table->dropColumn('no_matrimonio');
            $table->dropColumn('fecha_celebracion');
            $table->dropColumn('celebrante_name');
            $table->dropColumn('nombre_esposo');
            $table->dropColumn('documento_esposo');
            $table->dropColumn('nombre_esposa');
            $table->dropColumn('documento_esposa');
            $table->dropColumn('nombre_padrino');
            $table->dropColumn('documento_padrino');
            $table->dropColumn('nombre_madrina');
            $table->dropColumn('documento_madrina');
            $table->dropColumn('fecha_transcripcion');
            $table->dropColumn('no_libro');
            $table->dropColumn('folio');
            $table->dropColumn('no_transcripcion');
        });
    }
};
