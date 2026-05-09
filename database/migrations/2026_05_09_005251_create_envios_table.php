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
        Schema::create('envios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('venta_id');
            $table->string('calle');
            $table->integer('numero');
            $table->string('barrio')->nullable();
            $table->unsignedBigInteger('ciudad_id');
            $table->unsignedBigInteger('provincia_id');
            $table->unsignedBigInteger('codigo_postal');
            $table->dateTime('fecha_envio');
            $table->unsignedBigInteger('estado_envio_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('envios');
    }
};
