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
        Schema::create('atacs', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->integer("pp");
            $table->integer("precisio");
            $table->integer("potencia");
            $table->string("descripcio");
            $table->string("clase");
            $table->string("blanco");
            $table->string("efecto secundario");
            $table->integer("prioridad");
            $table->string("contacto");
            $table->integer("id_tipo");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atacs');
    }
};
