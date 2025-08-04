<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id('idPago');

            $table->foreignId('idReservaFK')
                ->constrained('bookings', 'idReserva')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->decimal('monto', 10, 2);
            $table->dateTime('fechaPago');

            $table->enum('metodoPago', [
                'Efectivo',
                'Tarjeta',
                'Transferencia',
                'PSE',
                'Nequi',
                'Daviplata'
            ]);

            $table->enum('estadoPago', ['Pendiente', 'Confirmado'])->default('Pendiente');

            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
