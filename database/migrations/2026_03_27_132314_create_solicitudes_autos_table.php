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
       Schema::create('solicitudes_autos', function (Blueprint $table) {
    $table->id();
    $table->string('nombre');
    $table->string('apellido');
    $table->string('correo');
    $table->string('telefono');

    $table->string('vehiculo_interes');
    $table->string('marca');
    $table->string('modelo');
    $table->year('anio');

    $table->string('tipo_pago'); // contado / financiado
    $table->decimal('presupuesto', 12, 2)->nullable();

    $table->text('mensaje')->nullable();

    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitudes_autos');
    }
};
