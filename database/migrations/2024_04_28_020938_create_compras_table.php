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
        Schema::create('compras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('helado_id');
            $table->integer('cantidad');
            $table->decimal('precio_unitario_compra', 5, 2);
            $table->decimal('precio_unitario_venta', 5, 2);
            $table->timestamps();

            $table->foreign('helado_id')->references('id')->on('helados')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compras');
    }
};
