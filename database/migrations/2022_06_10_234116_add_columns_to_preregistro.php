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
            $table->binary('FichaRegistro')->nullable();
            $table->binary('FotoCertificado')->nullable();
            $table->binary('FotoTitulo')->nullable();
            $table->binary('PartidaNacimiento')->nullable();
            $table->binary('CopiaDUI')->nullable();
            $table->binary('DeclaracionJurada')->nullable();
            $table->binary('CopiaDUIResponsable')->nullable();
            $table->binary('CertificadoOriginal')->nullable();
            $table->binary('CertificadoNotas')->nullable();
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
