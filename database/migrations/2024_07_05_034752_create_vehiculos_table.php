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
        Schema::create('vehiculos', function (Blueprint $table) {
            // La tabla patente sera la primaria y llevara la patente del vehiculo
            $table->string('patente',20)->primary();
            // 'marca' es un string que lleva la marca del vehiculo
            $table->string('marca',20);
            // 'modelo' es un string que lleva el modelo del vehiculo
            $table->string('modelo',50);
            // 'estado' es un enum que indica el estado en el que se encuentra el vehiculo.
            $table->enum('estado',['disponible','arrendado','de_baja','en_mantenimiento']);
            // 'tipo_id' es un integer positivo que apuntará al tipo de la tabla tipos
            $table->unsignedBigInteger('tipo_id');
            // 'tipo_id' es una foreign que referencia a un 'id' en la tabla 'tipos'
            $table->foreign('tipo_id')->references('id')->on('tipos');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehiculos');
    }
};
