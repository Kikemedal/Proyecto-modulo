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
        Schema::create('personaje_usuario', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('id_personaje');
            $table->foreign('id_personaje')->references('id')->on('personajes');
            $table->unsignedInteger('id_usuario');
            $table->foreign('id_usuario')->references('id')->on('usuario');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personaje_usuario');
    }
};
