<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Foundation\Auth\User as Authenticatable;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id('idCliente');
            $table->string('nombreCliente');
            $table->string('apellidoCliente');
            $table->string('fotoCliente');
            $table->string('correoCliente')->unique();
            $table->string('password');
            $table->string('telefonoCliente');
            $table->enum('tipoDocCliente', ['CC', 'CE', 'PAS']);
            $table->string('numeroDocCliente')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
