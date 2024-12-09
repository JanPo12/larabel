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
        Schema::create('liders_gyms', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->string("medalla");
            $table->integer("numero_gym");
            $table->string("ciutat");
            $table->integer("id_gen");
            $table->integer("id_tipus");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('liders_gyms');
    }
};
