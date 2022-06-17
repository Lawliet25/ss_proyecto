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
        Schema::create('matricula', function (Blueprint $table) {
          $table->engine="InnoDB";
          $table->id();
          $table->string('Turno');
          $table->string('Modalidad');
          $table->string('Jornada');
          $table->string('TipoIngreso')->nullable();
          $table->string('GradoMatricular');
          $table->string('Seccion');
          $table->string('DatosAdicionales')->nullable();
          $table->bigInteger('id_datosalumnofr')->unsigned();
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
        Schema::dropIfExists('matricula');
    }
};
