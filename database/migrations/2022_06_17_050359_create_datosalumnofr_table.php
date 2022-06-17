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
        Schema::create('datosalumnofr', function (Blueprint $table) {
          $table->engine="InnoDB";
          $table->id();
          $table->string('Sexo')->nullable();
          $table->date('FechaNacimiento');
          $table->string('Nacionalidad');
          $table->string('EstadoFamiliar')->nullable();
          $table->string('MedioTransporte')->nullable();
          $table->string('DistanciaSede')->nullable();
          $table->string('Trabaja')->nullable();
          $table->string('Ocupacion')->nullable();
          $table->string('Discapacidad')->nullable();
          $table->string('TipoDiscapacidad')->nullable();
          $table->string('Retornado')->nullable();
          $table->string('PaisRetornado')->nullable();
          $table->string('ConvivenciaFamiliar')->nullable();
          $table->string('DependenciaEconomica')->nullable();
          $table->integer('NumFamiliares')->nullable();
          $table->string('Enfermedades')->nullable();
          $table->string('Medicamentos')->nullable();
          $table->date('FechaFR')->nullable();
          $table->timestamps();
          $table->bigInteger('id_historialacademico')->unsigned();
          $table->bigInteger('id_preregistro')->unsigned();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datosalumnofr');
    }
};
