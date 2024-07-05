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
        Schema::create('arriendos', function (Blueprint $table) {
            $table->id();
            // Fecha y hora del inicio del arriendo
            $table->datetime('fecha_inicio');
            // Fecha y hora de la devolucion del arriendo
            $table->datetime('fecha_devolucion');
            $table->string('imagen_entrega')->nullable();
            $table->string('imagen_devolucion')->nullable();
            // string vehiculo_id
            $table->string('vehiculo_id');
            // Foranea vehiculo_id la cual apunta a un id en vehiculos.
            $table->foreign('vehiculo_id')->references('id')->on('vehiculos');
            // string usuario_email
            $table->string('usuario_email');
            // foranea usuario_email la cual apunta a un email en usuarios.
            $table->foreign('usuario_email')->references('email')->on('usuarios');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arriendos');
    }
};
