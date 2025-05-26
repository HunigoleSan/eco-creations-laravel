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
            $table->foreignId('codcli')->constrained('clientes')->onDelete('cascade');
            $table->enum('tipcomven',['boleta','factura']);
            $table->enum('metpagven',['yape','tarjeta','paypal']);
            $table->enum('estven',['pagado','devolucion','cancelado']);
            $table->dateTime('fecven');
            $table->dateTime('fecsalven')->nullable();
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
