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
            $table->foreignId('socia_id')->constrained('socias')->onDelete('cascade'); // Relación con Socias
            $table->foreignId('colmena_id')->constrained('colmenas')->onDelete('cascade'); // Relación con Colmenas
            $table->date('fecha_entrega');
            $table->foreignId('proposito')->constrained('actividads')->onDelete('cascade'); // Relación con Actividades
            $table->integer('ciclo');
            $table->integer('plazo');
            $table->decimal('credito', 10, 2);
            $table->decimal('aportacion_social', 10, 2);
            $table->decimal('abono', 10, 2);
            $table->decimal('saldo_credito', 10, 2);
            $table->integer('creditos_otorgados');
            $table->decimal('total_recuperado_credito', 10, 2);
            $table->decimal('total_recuperado_aportacion', 10, 2);
            $table->decimal('saldo_final', 10, 2);
            $table->string('estatus');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('credits');
    }
}

