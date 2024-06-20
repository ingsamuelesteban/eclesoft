<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('documentcbs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('correccionb_id')->nullable();
            $table->string('documento')->nullable();
            $table->string('titular_documento')->nullable();
            $table->string('referencias_documento')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documentcbs');
    }
};
