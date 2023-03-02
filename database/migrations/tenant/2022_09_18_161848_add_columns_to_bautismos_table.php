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
            $table->string('libro_bautismo');
            $table->string('folio_bautismo');
            $table->string('no_bautismo');
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
            $table->dropColumn('libro_bautismo');
            $table->dropColumn('folio_bautismo');
            $table->dropColumn('no_bautismo');
        });
    }
};
