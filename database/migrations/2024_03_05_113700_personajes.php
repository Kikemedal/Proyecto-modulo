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
        Schema::create('personajes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedInteger("id_usuario");
            $table->foreign('id_usuario')->references('id')->on('usuario');
            $table->string("nombre_personaje");
            $table->string("especie");
            $table->string("profesion");
            $table->string("especializacion");
            $table->string("genero");
            $table->integer("edad");
            $table->string("altura");
            $table->string("tipo_cuerpo");
            $table->string("ojos");
            $table->string("caract_extra");
            $table->string("motivacion1");
            $table->string("motivacion2");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
