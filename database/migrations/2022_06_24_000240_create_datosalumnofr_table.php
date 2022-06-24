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
            //Datos personales
            $table->string('Sexo')->nullable();
            $table->string('IdentidadGenero')->nullable();
            $table->date('FechaNacimiento')->nullable();
            $table->string('Nacionalidad')->nullable();
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
            $table->string('EspecifiqueConv')->nullable();
            $table->string('EspecifiqueEcon')->nullable();
            $table->integer('NumFamiliares')->nullable();
            $table->string('Enfermedades')->nullable();
            $table->string('Medicamentos')->nullable();
            $table->date('FechaFR')->nullable();
            //Historial Académico
            $table->string('InstitucionAcademica')->nullable();
            $table->string('AñoCursado')->nullable();
            $table->string('GradoCursado')->nullable();
            $table->string('CentroEducativo')->nullable();
            //Encargado
            $table->string('NombresEncargado')->nullable();
            $table->string('ApellidosEncargado')->nullable();
            $table->string('ParentescoEncargado')->nullable();
            $table->string('LugarTrabajoEncargado')->nullable();
            $table->string('TelefonoEncargado')->nullable();
            $table->string('DUIEncargado')->nullable();
            $table->string('ProfesionEncargado')->nullable();
            $table->string('DireccionEncargado')->nullable();
            //Matricula
            $table->string('Turno')->nullable();
            $table->string('Modalidad')->nullable();
            $table->string('Jornada')->nullable();
            $table->string('TipoIngreso')->nullable();
            $table->string('GradoMatricular')->nullable();
            $table->string('Seccion')->nullable();
            $table->string('DatosAdicionales')->nullable();
            //Residencia
            $table->string('Direccion')->nullable();
            $table->string('Zona')->nullable();
            $table->string('TelefonoResidencia')->nullable();
            $table->string('TelefonoTrabajo')->nullable();
            $table->string('Celular')->nullable();
            $table->string('Email')->nullable();
            $table->string('Departamento')->nullable();
            $table->string('Municipio')->nullable();
            //Hijos
            $table->string('CantidadHijos')->nullable();
            $table->string('Edad1')->nullable();
            $table->string('Sexo1')->nullable();
            $table->string('Edad2')->nullable();
            $table->string('Sexo2')->nullable();
            $table->string('Edad3')->nullable();
            $table->string('Sexo3')->nullable();
            $table->string('Edad4')->nullable();
            $table->string('Sexo4')->nullable();

            $table->string('PersonaRegistro')->nullable();
            $table->bigInteger('id_preregistro')->unsigned();
            $table->foreign('id_preregistro')->references('id')->on('preregistro');
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
        Schema::dropIfExists('datosalumnofr');
    }
};
