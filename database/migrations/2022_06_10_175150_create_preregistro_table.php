<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preregistro', function (Blueprint $table) {
          $table->id();
          $table->string('Nombres',200);
          $table->string('Apellidos',200);
          $table->string('NIE',20)->unique();
          $table->string('DUI',10)->unique();
          $table->string('Estado',20);
          $table->string('Grado',20);
          $table->string('Observacion',20);
          $table->string('PersonaRecibido',200);
          $table->date('FechaRecepcion');
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('preregistro');
    }
};
