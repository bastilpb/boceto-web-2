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
            $table->String('rut_cliente', 10);
            $table->String('patente_vehiculo');
            $table->date('fecha_incio');
            $table->date('fecha_termino');
            $table->String('imagen_entrega');
            $table->String('imagen_recepcion');

            $table->foreign('patente_vehiculo')->references('patente')->on('vehiculos');


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
