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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id('idReserva');

            $table->foreignId('idEmpleadoFK')
                ->constrained('employees', 'idEmpleado')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->foreignId('idPaqueteFK')
                ->constrained('packages', 'idPaquete')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->foreignId('idCitaFK')
                ->constrained('appointments', 'idCita')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->enum('estadoReserva', ['Pendiente', 'Confirmada', 'Cancelada', 'Finalizada']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
