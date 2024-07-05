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
        Schema::create('usuarios', function (Blueprint $table) {
            // La primaria es 'email' con largo 50
            $table->string('email',50)->primary();
            // Luego le sigue la password que es de largo 60 por el tamaño fijo que usa el Hashing
            $table->string('password', 60);
            // La tabla nombre la cual es un string con largo 20
            $table->string('nombre',20);
            // La tabla perfil la cual es un integer positivo
            $table->unsignedBigInteger('perfil_id');
            // Esta tabla es la foranea de usuarios y referencia a un id en la tabla perfiles
            $table->foreign('perfil_id')->references('id')->on('perfiles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
