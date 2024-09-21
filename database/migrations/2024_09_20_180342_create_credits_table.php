<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditsTable extends Migration
{
    public function up()
    {
        Schema::create('credits', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');  // Nombre de la prestaria
            $table->string('colmena'); // Nombre de la colmena y sucursal
            $table->date('fecha_entrega');  // Fecha de entrega del crédito
            $table->string('proposito');  // Propósito del crédito
            $table->integer('ciclo');  // Ciclo del crédito
            $table->integer('plazo');  // Plazo del crédito
            $table->decimal('credito', 10, 2);  // Monto del crédito
            $table->decimal('aportacion_social', 10, 2);  // Aportación social
            $table->decimal('abono', 10, 2);  // Abono
            $table->decimal('saldo_credito', 10, 2);  // Saldo del crédito
            $table->integer('creditos_otorgados');  // Créditos otorgados
            $table->decimal('total_recuperado_credito', 10, 2);  // Total recuperado (crédito)
            $table->decimal('total_recuperado_aportacion', 10, 2);  // Total recuperado (aportación social)
            $table->decimal('saldo_final', 10, 2);  // Saldo final del crédito
            $table->string('estatus');  // Estatus de la prestaria
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('credits');
    }
}
