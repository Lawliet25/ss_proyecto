<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DatosAlumno;
use App\Models\Preregistro;
use App\Models\SedesModel;

class FichaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $preregistros=Preregistro::all();
      $alumnos=DatosAlumno::all();
      $sedes=SedesModel::all();
      $buscar = $request->get('buscarpor');
      $tipo = $request->get('tipo');
      $tipo2 = DatosAlumno::get('Sede');
      //$preregistros = Preregistro::Buscarpor($tipo, $buscar)->paginate(5);
      //return view('Ficha.index',['alumnos'=>$alumnos]);
      $data = Preregistro::join('datosalumnofr', 'preregistro.id', 'datosalumnofr.id_preregistro')
              ->select('datosalumnofr.id','preregistro.NIE', 'preregistro.Nombres', 'preregistro.Apellidos',
                'datosalumnofr.Seccion', 'datosalumnofr.Modalidad','datosalumnofr.FechaFR', 'datosalumnofr.Turno',
                'datosalumnofr.PersonaRegistro','datosalumnofr.Sede','datosalumnofr.GradoMatricular')
              ->Buscarpor($tipo, $buscar)
              ->paginate(5);

               return view('Ficha.index',['buscar'=>$buscar],['data'=>$data],['buscar'=>$buscar]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //$preregistro=Preregistro::find($id);
        //$preregistros=Preregistro::pluck('id');
        $preregistro=Preregistro::find($id);
        return view('Ficha.create', compact('preregistro'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

          //Alumnosfr
          'Sexo'=>'required',
          //'IdentidadGenero'=>'string',
          'FechaNacimiento'=>'required',
          'Nacionalidad'=>'required',
          'EstadoFamiliar'=>'required',
          'MedioTransporte'=>'required',
          'DistanciaSede'=>['required','string'],
          'Trabaja'=>'required',
          //'Ocupacion'=>'string',
          'Discapacidad'=>'required',
          //'TipoDiscapacidad'=>'string',
          'Retornado'=>'required',
          //'Pais'=>'string',
          'ConvivenciaFamiliar'=>'required',
          'DependenciaEconomica'=>'required',
          'NumFamiliares'=>'required',
          'Enfermedades'=>['required','string'],
          //'Medicamentos'=>'string',
          'FechaFR'=>'required',
          //'EspecifiqueConv'=>'string',
          //'EspecifiqueEcon'=>'string',

          //Historial
          'InstitucionAcademica'=>'required',
          'AñoCursado'=>['required','numeric'],
          'GradoCursado'=>'required',
          'CentroEducativo'=>['required','string'],

          //Encargado
          'NombresEncargado'=>['required','string'],
          'ApellidosEncargado'=>['required','string'],
          //'DUIEncargado'=>'string',
          //'LugarTrabajoEncargado'=>'string',
          //'TelefonoEncargado'=>'string',
          //'ProfesionEncargado'=>'string',
          //'DireccionEncargado'=>'string',
          'ParentescoEncargado'=>'required',

          //Matricula
          'Turno'=>'required',
          'Modalidad'=>'required',
          'Jornada'=>'required',
          'TipoIngreso'=>'required',
          'GradoMatricular'=>'required',
          'Seccion'=>'required',
          //'DatosAdicionales'=>'string',

          //Residencia
          'Direccion'=>['required','string'],
          'Zona'=>'required',
          'Celular'=>['required','string'],
          'Departamento'=>'required',
          'Municipio'=>['required','string'],

          //Hijos
          'CantidadHijos'=>'required',
          'PersonaRegistro'=>['required','string'],
          //'Edad1'=>'string',
          //'Sexo1'=>'string',
          //'Edad2'=>'string',
          //'Sexo2'=>'string',
          //'Edad3'=>'string',
          //'Sexo3'=>'string',
          //'Edad4'=>'string',
          //'Sexo4'=>'string',

          //Sede
          //'CodigoSede'=>'string',
          //'Sede'=>'string'
        ]);

        $alumno= new DatosAlumno();

        //Alumnosfr
        $alumno->Sexo=$request->Sexo;
        $alumno->IdentidadGenero=$request->IdentidadGenero;
        $alumno->FechaNacimiento=$request->FechaNacimiento;
        $alumno->Nacionalidad=$request->Nacionalidad;
        $alumno->EstadoFamiliar=$request->EstadoFamiliar;
        $alumno->MedioTransporte=$request->MedioTransporte;
        $alumno->DistanciaSede=$request->DistanciaSede;
        $alumno->Trabaja=$request->Trabaja;
        $alumno->Ocupacion=$request->Ocupacion;
        $alumno->Discapacidad=$request->Discapacidad;
        $alumno->TipoDiscapacidad=$request->TipoDiscapacidad;
        $alumno->Retornado=$request->Retornado;
        $alumno->PaisRetornado=$request->PaisRetornado;
        $alumno->ConvivenciaFamiliar=$request->ConvivenciaFamiliar;
        $alumno->DependenciaEconomica=$request->DependenciaEconomica;
        $alumno->EspecifiqueConv=$request->EspecifiqueConv;
        $alumno->EspecifiqueEcon=$request->EspecifiqueEcon;
        $alumno->NumFamiliares=$request->NumFamiliares;
        $alumno->Enfermedades=$request->Enfermedades;
        $alumno->Medicamentos=$request->Medicamentos;
        $alumno->FechaFR=$request->FechaFR;

        //Historial
        $alumno->InstitucionAcademica=$request->InstitucionAcademica;
        $alumno->AñoCursado=$request->AñoCursado;
        $alumno->GradoCursado=$request->GradoCursado;
        $alumno->CentroEducativo=$request->CentroEducativo;

        //Encargado
        $alumno->NombresEncargado=$request->NombresEncargado;
        $alumno->ApellidosEncargado=$request->ApellidosEncargado;
        $alumno->ParentescoEncargado=$request->ParentescoEncargado;
        $alumno->LugarTrabajoEncargado=$request->LugarTrabajoEncargado;
        $alumno->TelefonoEncargado=$request->TelefonoEncargado;
        $alumno->DUIEncargado=$request->DUIEncargado;
        $alumno->ProfesionEncargado=$request->ProfesionEncargado;
        $alumno->DireccionEncargado=$request->DireccionEncargado;

        //Matrícula
        $alumno->Turno=$request->Turno;
        $alumno->Modalidad=$request->Modalidad;
        $alumno->Jornada=$request->Jornada;
        $alumno->TipoIngreso=$request->TipoIngreso;
        $alumno->GradoMatricular=$request->GradoMatricular;
        $alumno->Seccion=$request->Seccion;
        $alumno->DatosAdicionales=$request->DatosAdicionales;

        //Residencia
        $alumno->Direccion=$request->Direccion;
        $alumno->Zona=$request->Zona;
        $alumno->TelefonoResidencia=$request->TelefonoResidencia;
        $alumno->TelefonoTrabajo=$request->TelefonoTrabajo;
        $alumno->Celular=$request->Celular;
        $alumno->Email=$request->Email;
        $alumno->Departamento=$request->Departamento;
        $alumno->Municipio=$request->Municipio;

        //Hijos
        $alumno->CantidadHijos=$request->CantidadHijos;
        $alumno->Edad1=$request->Edad1;
        $alumno->Sexo1=$request->Sexo1;
        $alumno->Edad2=$request->Edad2;
        $alumno->Sexo2=$request->Sexo2;
        $alumno->Edad3=$request->Edad3;
        $alumno->Sexo3=$request->Sexo3;
        $alumno->Edad4=$request->Edad4;
        $alumno->Sexo4=$request->Sexo4;
        $alumno->PersonaRegistro=$request->PersonaRegistro;

        //Sede
        $alumno->CodigoSede=$request->CodigoSede;
        $alumno->Sede=$request->Sede;

        //Foránea
        $alumno->id_preregistro=$request->id_preregistro;


        $alumno->save();
        return redirect()->route('Ficha.index')->with('status', 'Ficha registrada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      //$preregistro = Preregistro::all();
      $alumno=DatosAlumno::find($id);
      return view('Ficha.edit', compact('alumno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

      //$preregistro= Preregistro::find($id);
      $alumno=  DatosAlumno::find($id);

      //Alumnosfr
      $alumno->Sexo=$request->Sexo;
      $alumno->IdentidadGenero=$request->IdentidadGenero;
      $alumno->FechaNacimiento=$request->FechaNacimiento;
      $alumno->Nacionalidad=$request->Nacionalidad;
      $alumno->EstadoFamiliar=$request->EstadoFamiliar;
      $alumno->MedioTransporte=$request->MedioTransporte;
      $alumno->DistanciaSede=$request->DistanciaSede;
      $alumno->Trabaja=$request->Trabaja;
      $alumno->Ocupacion=$request->Ocupacion;
      $alumno->Discapacidad=$request->Discapacidad;
      $alumno->TipoDiscapacidad=$request->TipoDiscapacidad;
      $alumno->Retornado=$request->Retornado;
      $alumno->PaisRetornado=$request->PaisRetornado;
      $alumno->ConvivenciaFamiliar=$request->ConvivenciaFamiliar;
      $alumno->DependenciaEconomica=$request->DependenciaEconomica;
      $alumno->EspecifiqueConv=$request->EspecifiqueConv;
      $alumno->EspecifiqueEcon=$request->EspecifiqueEcon;
      $alumno->NumFamiliares=$request->NumFamiliares;
      $alumno->Enfermedades=$request->Enfermedades;
      $alumno->Medicamentos=$request->Medicamentos;
      $alumno->FechaFR=$request->FechaFR;

      //Historial
      $alumno->InstitucionAcademica=$request->InstitucionAcademica;
      $alumno->AñoCursado=$request->AñoCursado;
      $alumno->GradoCursado=$request->GradoCursado;
      $alumno->CentroEducativo=$request->CentroEducativo;

      //Encargado
      $alumno->NombresEncargado=$request->NombresEncargado;
      $alumno->ApellidosEncargado=$request->ApellidosEncargado;
      $alumno->ParentescoEncargado=$request->ParentescoEncargado;
      $alumno->LugarTrabajoEncargado=$request->LugarTrabajoEncargado;
      $alumno->TelefonoEncargado=$request->TelefonoEncargado;
      $alumno->DUIEncargado=$request->DUIEncargado;
      $alumno->ProfesionEncargado=$request->ProfesionEncargado;
      $alumno->DireccionEncargado=$request->DireccionEncargado;

      //Matrícula
      $alumno->Turno=$request->Turno;
      $alumno->Modalidad=$request->Modalidad;
      $alumno->Jornada=$request->Jornada;
      $alumno->TipoIngreso=$request->TipoIngreso;
      $alumno->GradoMatricular=$request->GradoMatricular;
      $alumno->Seccion=$request->Seccion;
      $alumno->DatosAdicionales=$request->DatosAdicionales;

      //Residencia
      $alumno->Direccion=$request->Direccion;
      $alumno->Zona=$request->Zona;
      $alumno->TelefonoResidencia=$request->TelefonoResidencia;
      $alumno->TelefonoTrabajo=$request->TelefonoTrabajo;
      $alumno->Celular=$request->Celular;
      $alumno->Email=$request->Email;
      $alumno->Departamento=$request->Departamento;
      $alumno->Municipio=$request->Municipio;

      //Hijos
      $alumno->CantidadHijos=$request->CantidadHijos;
      $alumno->Edad1=$request->Edad1;
      $alumno->Sexo1=$request->Sexo1;
      $alumno->Edad2=$request->Edad2;
      $alumno->Sexo2=$request->Sexo2;
      $alumno->Edad3=$request->Edad3;
      $alumno->Sexo3=$request->Sexo3;
      $alumno->Edad4=$request->Edad4;
      $alumno->Sexo4=$request->Sexo4;
      $alumno->PersonaRegistro=$request->PersonaRegistro;

      //Sede
      $alumno->CodigoSede=$request->CodigoSede;
      $alumno->Sede=$request->Sede;

      //Foránea
      $alumno->id_preregistro=$request->id_preregistro;


      $alumno->save();
      return redirect()->route('Ficha.index')->with('status', 'Ficha modificada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $alumno=DatosAlumno::destroy($id);
      return redirect()->route('Ficha.index')->with('status', 'Ficha eliminada correctamente.');
    }
}
