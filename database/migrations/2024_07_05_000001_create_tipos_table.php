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
        Schema::create('tipos', function (Blueprint $table) {
            // La primaria de esta tabla es 'id'
            $table->id();
            // Esta tabla llevará el nombre del tipo de vehiculos
            $table->string('nombre','20');
            // Esta tabla llevará el costo del tipo de vehiculos
            $table->unsignedBigInteger('costo');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipos');
    }
};
