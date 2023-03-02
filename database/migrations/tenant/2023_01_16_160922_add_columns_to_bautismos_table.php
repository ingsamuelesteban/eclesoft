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
            $table->string('dia');
            $table->string('mes');
            $table->string('ano');
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
            $table->dropColumn('dia');
            $table->dropColumn('mes');
            $table->dropColumn('ano');
        });
    }
};
