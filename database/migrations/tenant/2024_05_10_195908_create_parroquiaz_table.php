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
        Schema::create('parroquiazs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('parroquia')->nullable();
            $table->string('telefonop')->nullable();
            $table->string('rnc')->nullable();
            $table->string('parroco')->nullable();
            $table->string('vicario')->nullable();
            $table->string('calle')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('provincia')->nullable();
            $table->string('correo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parroquiaz');
    }
};
