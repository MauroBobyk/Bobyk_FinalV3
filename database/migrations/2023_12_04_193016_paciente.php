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
        Schema::create('pacientes', function (Blueprint $paciente) {
            
            $paciente->string('nombre_apellido');
            $paciente->string('dni')->unique();
            $paciente->integer('edad');
            $paciente->string('telefono');
            $paciente->date('fecha_nacimiento');
            $paciente->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
