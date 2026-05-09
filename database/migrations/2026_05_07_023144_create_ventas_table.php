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
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->integer('n_factura');
            $table->unsignedBigInteger('user_id');
            $table->time('fecha_venta');
            $table->unsignedBigInteger('metodos_pagos_id');
            $table->unsignedBigInteger('estados_pagos_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('metodos_pagos_id')->references('id')->on('metodos_pagos');
            $table->foreign('estados_pagos_id')->references('id')->on('estados_pagos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};
