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
        Schema::create('pokemon', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->double("alçada");
            $table->double("pes");
            $table->integer("hp");
            $table->integer("atac");
            $table->integer("defensa");
            $table->integer("atac_esp");
            $table->integer("defensa_esp");
            $table->integer("velocitat");
            $table->string("descripcio");
            $table->string("sprite");
            $table->string("sprite_shiny");
            $table->integer("id_gen");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pokemon');
    }
};
