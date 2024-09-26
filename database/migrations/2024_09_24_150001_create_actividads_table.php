<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActividadsTable extends Migration
{
    public function up()
    {
        Schema::create('actividads', function (Blueprint $table) {
            $table->id();
            $table->string('actividad_economica')->nullable(); // Cambia a nullable si es necesario
            $table->timestamps();
        });
    }
    

    public function down()
    {
        Schema::dropIfExists('actividades');
    }
}
