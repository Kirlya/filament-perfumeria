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
        Schema::create('etiquetaxproducto', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('etiqueta_id');
            $table->unsignedBigInteger('producto_id');
            $table->foreign('etiqueta_id')->references('id')->on('etiquetas');
            $table->foreign('producto_id')->references('id')->on('productos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etiquetaxproducto');
    }
};
