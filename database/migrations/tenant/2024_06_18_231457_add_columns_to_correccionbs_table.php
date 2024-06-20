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
        Schema::table('correccionbs', function (Blueprint $table) {
            $table->string('libro_decreto')->nullable();
            $table->string('folio_decreto')->nullable();
            $table->string('no_decreto')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('correccionbs', function (Blueprint $table) {
            //
        });
    }
};
