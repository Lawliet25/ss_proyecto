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
        Schema::table('preregistro', function (Blueprint $table) {
          $table->string('CodigoSede',50)->nullable();
          $table->string('Sede',200)->nullable();
          $table->string('Turno',200)->nullable();
          $table->string('Modalidad',200)->nullable();
          $table->string('Jornada',200)->nullable();
          $table->string('TipoIngreso',200)->nullable();
          $table->string('Seccion',200)->nullable();
          $table->integer('Año');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('preregistro', function (Blueprint $table) {
            //
        });
    }
};
