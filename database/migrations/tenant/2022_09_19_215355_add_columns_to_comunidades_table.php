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
        Schema::table('comunidades', function (Blueprint $table) {
        $table->string('nombre_comunidad')->nullable();
        $table->string('ubicacion')->nullable();
        $table->string('coordinador')->nullable();
        $table->string('telefonoc')->nullable();
        $table->string('pfamiliar')->nullable();
        $table->string('tfamiliar')->nullable();
        $table->string('pjuvenil')->nullable();
        $table->string('tjuvenil')->nullable();
        $table->string('padolescentes')->nullable();
        $table->string('tadolescentes')->nullable();
        $table->string('pvocacional')->nullable();
        $table->string('tvocacional')->nullable();
        $table->string('psocial')->nullable();
        $table->string('tsocial')->nullable();
        $table->string('psalud')->nullable();
        $table->string('tsalud')->nullable();
        $table->string('pmisiones')->nullable();
        $table->string('tmisiones')->nullable();
        $table->string('pcatequesis')->nullable();
        $table->string('tcatequesis')->nullable();
        $table->string('pliturgica')->nullable();
        $table->string('tliturgica')->nullable();
        $table->string('ppenitenciaria')->nullable();
        $table->string('tpenitenciaria')->nullable();
        $table->string('pmovilidad')->nullable();
        $table->string('tmovilidad')->nullable();
        $table->string('peducativa')->nullable();
        $table->string('teducativa')->nullable();
        $table->string('puniversitaria')->nullable();
        $table->string('tuniversitaria')->nullable();
        $table->string('pcomunion')->nullable();
        $table->string('tcomunion')->nullable();
        $table->string('pecumenismo')->nullable();
        $table->string('tecumenismo')->nullable();
        $table->string('pambiente')->nullable();
        $table->string('tambiente')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comunidades', function (Blueprint $table) {
            $table->dropColumn('nombre_comunidad');
            $table->dropColumn('ubicacion');
            $table->dropColumn('coordinador');
            $table->dropColumn('telefonoc');
            $table->dropColumn('pfamiliar');
            $table->dropColumn('tfamiliar');
            $table->dropColumn('pjuvenil');
            $table->dropColumn('tjuvenil');
            $table->dropColumn('padolescentes');
            $table->dropColumn('tadolescentes');
            $table->dropColumn('pvocacional');
            $table->dropColumn('tvocacional');
            $table->dropColumn('psocial');
            $table->dropColumn('tsocial');
            $table->dropColumn('psalud');
            $table->dropColumn('tsalud');
            $table->dropColumn('pmisiones');
            $table->dropColumn('tmisiones');
            $table->dropColumn('pcatequesis');
            $table->dropColumn('tcatequesis');
            $table->dropColumn('pliturgica');
            $table->dropColumn('tliturgica');
            $table->dropColumn('ppenitenciaria');
            $table->dropColumn('tpenitenciaria');
            $table->dropColumn('pmovilidad');
            $table->dropColumn('tmovilidad');
            $table->dropColumn('peducativa');
            $table->dropColumn('teducativa');
            $table->dropColumn('puniversitaria');
            $table->dropColumn('tuniversitaria');
            $table->dropColumn('pcomunion');
            $table->dropColumn('tcomunion');
            $table->dropColumn('pecumenismo');
            $table->dropColumn('tecumenismo');
            $table->dropColumn('pambiente');
            $table->dropColumn('tambiente');
        });
    }
};
