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
            $table->string('NIE',20)->nullable();
            $table->string('DUI',10)->nullable();
            $table->string('Estado',20);
            $table->string('Grado',20);
            $table->string('Observacion',20)->nullable();
            $table->string('PersonaRecibido',200);
            $table->date('FechaRecepcion');
            $table->string('FichaRegistro')->nullable();
            $table->string('FotoCertificado')->nullable();
            $table->string('FotoTitulo')->nullable();
            $table->string('PartidaNacimiento')->nullable();
            $table->string('CopiaDui')->nullable();
            $table->string('DeclaracionJurada')->nullable();
            $table->string('CopiaDuiResponsable')->nullable();
            $table->string('CertificadoOriginal')->nullable();
            $table->string('CertificadoNotas')->nullable();
            $table->string('DocumentoPdf')->nullable();
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
