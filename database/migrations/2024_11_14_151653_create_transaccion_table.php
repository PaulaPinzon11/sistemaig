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
        Schema::create('transacciones', function (Blueprint $table2) {
            $table2->id();
            $table2->string('categoria');
            $table2->dateTime('fecha');
            $table2->string('descripcion');
            $table2->string('tipo');
            $table2->integer('valor');
            $table2->string('mediopago');
            $table2->integer('numcomprobante');
            $table2->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transacciones');
    }
};
