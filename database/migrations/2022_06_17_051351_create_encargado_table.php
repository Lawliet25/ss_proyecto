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
        Schema::create('encargado', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->string('Nombres');
            $table->string('Apellidos');
            $table->string('Parentesco');
            $table->string('LugarTrabajo')->nullable();
            $table->string('Telefono');
            $table->string('DUI');
            $table->string('Profesion')->nullable();
            $table->string('Direccion')->nullable();
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
        Schema::dropIfExists('encargado');
    }
};
