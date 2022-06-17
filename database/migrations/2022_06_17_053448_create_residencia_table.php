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
        Schema::create('residencia', function (Blueprint $table) {
          $table->engine="InnoDB";
          $table->id();
          $table->string('Direccion');
          $table->string('Zona');
          $table->string('TelefonoResidencia');
          $table->string('TelefonoTrabajo')->nullable();
          $table->string('Celular');
          $table->string('Email');
          $table->bigInteger('id_datosalumnofr')->unsigned();
          $table->bigInteger('id_departamento')->unsigned();
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
        Schema::dropIfExists('residencia');
    }
};
