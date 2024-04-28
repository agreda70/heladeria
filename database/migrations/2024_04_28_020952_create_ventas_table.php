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
            $table->unsignedBigInteger('helado_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('metodo_de_pago_id');
            $table->unsignedBigInteger('moneda_id');
            $table->integer('cantidad');
            $table->decimal('precio_venta', 5, 2);
            $table->string('nro_transferencia', 20);
            $table->decimal('tasa', 5, 2);
            $table->boolean('pagado')->default(true);
            $table->string('nombre_deudor', 40);
            $table->timestamps();

            $table->foreign('helado_id')->references('id')->on('helados');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('metodo_de_pago_id')->references('id')->on('metodo_de_pagos');
            $table->foreign('moneda_id')->references('id')->on('monedas');
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
