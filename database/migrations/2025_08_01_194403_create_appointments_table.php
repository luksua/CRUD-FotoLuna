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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id('idCita');

            $table->foreignId('idClienteFK')
                ->constrained('customers', 'idCliente')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->foreignId('idEventoFK')
                ->constrained('events', 'idEvento')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->date('fechaCita');
            $table->time('horaCita');
            $table->string('lugar', 100);
            $table->text('comentario')->nullable();
            $table->enum('estadoCita', ['Agendada', 'Cancelada', 'Por confirmar', 'Completada', 'Reprogramada']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
