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
        Schema::create('employees', function (Blueprint $table) {
            $table->id('idEmpleado');
            $table->string('nombreEmpleado');
            $table->string('apellidoEmpleado');
            $table->string('telefonoEmpleado');
            $table->string('direccion');
            $table->string('tipoDocEmpleado');
            $table->string('correoEmpleado');
            $table->string('password');
            $table->enum('tipoEmpleado', ['Empleado', 'Admin']);
            $table->enum('genero', ['Femenino', 'Masculino', 'Otro']);
            $table->string('EPS');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
