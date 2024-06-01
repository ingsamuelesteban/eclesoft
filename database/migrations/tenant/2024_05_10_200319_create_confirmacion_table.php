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
        Schema::create('confirmacions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('libro_confirmacion')->nullable();
            $table->string('folio_confirmacion')->nullable();
            $table->string('no_confirmacion')->nullable();  
            $table->string('celebrante')->nullable();
            $table->string('parroquia_id')->nullable(); 
            $table->string('fecha_celebracion')->nullable(); 
            $table->string('nombre')->nullable(); 
            $table->string('apellidos')->nullable();
            $table->string('edad')->nullable();  
            $table->string('nombre_madre')->nullable();
            $table->string('nombre_padre')->nullable();  
            $table->string('padrinos')->nullable();
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
        Schema::dropIfExists('confirmacions');
    }
};
