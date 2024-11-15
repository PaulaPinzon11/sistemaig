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
        Schema::create('gastos', function (Blueprint $table1) {
            $table1->id();
            $table1->string('categoria');
            $table1->dateTime('fecha');
            $table1->string('descripcion');
            $table1->string('tipo');
            $table1->integer('valor');
            $table1->string('mediopago');
            $table1->integer('numcomprobante');
            $table1->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gastos');
    }
};
