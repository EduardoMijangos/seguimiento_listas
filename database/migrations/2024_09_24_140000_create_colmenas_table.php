<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColmenasTable extends Migration
{
    public function up()
    {
        Schema::create('colmenas', function (Blueprint $table) {
            $table->id();
            $table->string('numero_colmena');
            $table->string('nombre_colmena');
            $table->string('sucursal');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('colmenas');
    }
}
