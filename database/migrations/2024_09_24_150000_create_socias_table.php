<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSociasTable extends Migration
{
    public function up()
    {
        Schema::create('socias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('grupo_id'); // Relación con grupos
            $table->string('nombre1');
            $table->string('nombre2')->nullable();
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->timestamps();

            // Foreign key con la tabla grupos
            $table->foreign('grupo_id')->references('id')->on('grupos')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('socias');
    }
}
