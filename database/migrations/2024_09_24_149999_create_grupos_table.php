<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGruposTable extends Migration
{
    public function up()
    {
        Schema::create('grupos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('colmena_id'); // Relación con colmenas
            $table->string('nombre_grupo');
            $table->timestamps();

            // Foreign key con la tabla colmenas
            $table->foreign('colmena_id')->references('id')->on('colmenas')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('grupos');
    }
}

