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
      /*En esta función se muestran los resultados de la consulta
      a la base de datos*/
      $preregistros=Preregistro::all();
      $alumnos=DatosAlumno::all();
      $sedes=SedesModel::all();
      $buscar = $request->get('buscarpor');
      $tipo = $request->get('tipo');
      $tipo2 = DatosAlumno::get('Sede');
      $data = Preregistro::join('datosalumnofr', 'preregistro.id', 'datosalumnofr.id_preregistro')
              ->select('datosalumnofr.id','preregistro.NIE', 'preregistro.Nombres', 'preregistro.Apellidos',
                'preregistro.Seccion', 'preregistro.Modalidad','datosalumnofr.FechaFR', 'preregistro.Turno',
                'datosalumnofr.PersonaRegistro','datosalumnofr.Sede','preregistro.Grado', 'datosalumnofr.FechaNacimiento',
                'datosalumnofr.Celular','datosalumnofr.NombresEncargado','datosalumnofr.ApellidosEncargado')
              ->Buscarpor($tipo, $buscar)
              ->paginate(10);
               return view('Ficha.index',['buscar'=>$buscar],['data'=>$data],['buscar'=>$buscar]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        /*Redireccion a la vista Create de Ficha Grande
        */
        $preregistro=Preregistro::find($id);
        return view('Ficha.create', compact('preregistro'));//El atributo compact es para guardar id de preregistro y concatenar con el matriculado.
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* Validaciones de los campos requeridos
        para el llenado de ficha grande  */
        $request->validate([

          //Alumnosfr
          'Sexo'=>'required',
          'FechaNacimiento'=>'required',
          'Nacionalidad'=>'required',
          'EstadoFamiliar'=>'required',
          'MedioTransporte'=>'required',
          'DistanciaSede'=>['required','string'],
          'Trabaja'=>'required',
          'Discapacidad'=>'required',
          'Retornado'=>'required',
          'ConvivenciaFamiliar'=>'required',
          'DependenciaEconomica'=>'required',
          'NumFamiliares'=>'required',
          'Enfermedades'=>['required','string'],
          'FechaFR'=>'required',

          //Historial
          'InstitucionAcademica'=>'required',
          'AñoCursado'=>['required','numeric'],
          'GradoCursado'=>'required',
          'CentroEducativo'=>['required','string'],

          //Encargado
          'NombresEncargado'=>['required','string'],
          'ApellidosEncargado'=>['required','string'],
          'ParentescoEncargado'=>'required',

          //Residencia
          'Direccion'=>['required','string'],
          'Zona'=>'required',
          'Celular'=>['required','string'],
          'Departamento'=>'required',
          'Municipio'=>['required','string'],

          //Hijos
          'CantidadHijos'=>'required',
          'PersonaRegistro'=>['required','string'],
        ]);

        /* Creando el objeto alumno con campos de la base de datos
        y haciendo el insert */
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
        return redirect()->route('Ficha.index')->with('status', 'Ficha registrada correctamente.');//Redireccion a vista index de alumnos matriculados junto con alerta
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $alumno=DatosAlumno::find($id);
      return view('Ficha.verFR', compact('alumno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      /* Se redirige a vista edit de ficha grande */
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

        /* Buscando el objeto alumno ya existente con campos de la base de datos
        y haciendo el update*/

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
      return redirect()->route('Ficha.index')->with('status', 'Ficha modificada correctamente.');//Redireccion a vista index de alumnos matriculados junto con alerta
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
      return redirect()->route('Ficha.index')->with('status', 'Ficha eliminada correctamente.');//Redireccion a vista index de alumnos matriculados junto con alerta
    }
}
