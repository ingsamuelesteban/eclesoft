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
        Schema::table('parroquias', function (Blueprint $table) {
            $table->string('diocesis');
            $table->string('obispo');
            $table->string('parroquia');
            $table->string('telefonop');
            $table->string('parroco');
            $table->string('vicario');
            $table->string('rnc');
            $table->string('correo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('parroquias', function (Blueprint $table) {
            $table->dropColumn('diocesis');
            $table->dropColumn('obispo');
            $table->dropColumn('parroquia');
            $table->dropColumn('telefonop');
            $table->dropColumn('parroco');
            $table->dropColumn('vicario');
        });
    }
};
