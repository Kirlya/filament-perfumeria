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
        // Codigo postal clave principal
        Schema::create('cp', function (Blueprint $table) {
            $table->string('codigo_postal');
            $table->unsignedBigInteger('provincia_id');
            $table->unsignedBigInteger('ciudad_id');
            $table->primary('codigo_postal');
            $table->foreign('provincia_id')->references('id')->on('provincias');
            $table->foreign('ciudad_id')->references('id')->on('ciudades');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cp');
    }
};
