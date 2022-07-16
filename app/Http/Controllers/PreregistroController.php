<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Preregistro;
use App\Models\DatosAlumno;

class PreregistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        /* Se muestran los datos existentes en base de datos
        de alumnos preregistrados */
        $buscar = $request->get('buscarpor');
        $tipo = $request->get('tipo');
        $preregistros = Preregistro::Buscarpor($tipo, $buscar)->paginate(10);
        return view('pre.index',['preregistros'=>$preregistros],['buscar'=>$buscar]);
      }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /* Se redirige a vista create de preregistro */
        $alumno=DatosAlumno::all();
        return view('pre.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      /* Se validan los campos a insertar en base de datos */
      $request->validate([
        'Nombres'=>['required','string'],
        'Apellidos'=>['required','string'],
        //'NIE'=>['unique:preregistro', 'required'],
        //'DUI'=>['required', 'regex: /^[0-9]{8}-[0-9]{1}/','unique:preregistro'],
        'FechaRecepcion'=>'required',
        'Estado'=>'required',
        'PersonaRecibido'=>'required',
        'Año'=>'required',
        //Matricula
        'Grado'=>'required'

      ]);

      /* Se crea el objeto preregistro y se insertan
      los campos ya validados en base de datos */
      $preregistro= new Preregistro();

      $preregistro->Nombres=$request->Nombres;
      $preregistro->Apellidos=$request->Apellidos;
      $preregistro->NIE=$request->NIE;
      $preregistro->DUI=$request->DUI;
      $preregistro->FechaRecepcion=$request->FechaRecepcion;
      $preregistro->Estado=$request->Estado;
      $preregistro->PersonaRecibido=$request->PersonaRecibido;
      $preregistro->Grado=$request->Grado;
      $preregistro->Observacion=$request->Observacion;
      $preregistro->Año=$request->Año;

      //matrícula
      $preregistro->Turno=$request->Turno;
      $preregistro->Modalidad=$request->Modalidad;
      $preregistro->Jornada=$request->Jornada;
      $preregistro->TipoIngreso=$request->TipoIngreso;
      $preregistro->Seccion=$request->Seccion;

      //Sede
      $preregistro->CodigoSede=$request->CodigoSede;
      $preregistro->Sede=$request->Sede;

      $preregistro->save();
      return redirect()->route('pre.index')->with('status', 'Preregistro ingresado correctamente.');//Redirecciona a vista index junto con alerta
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
      /* Se redirige a vista edit y se concatena
       el id del alumno que se va a modificar */
      $preregistro=Preregistro::find($id);
      return view('pre.edit', compact('preregistro'));
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
      /* Se busca el objeto del preregistro
      mediante el id y se modifican los campos */
      $preregistro= Preregistro::find($id);

      $preregistro->Nombres=$request->Nombres;
      $preregistro->Apellidos=$request->Apellidos;
      $preregistro->NIE=$request->NIE;
      $preregistro->DUI=$request->DUI;
      $preregistro->FechaRecepcion=$request->FechaRecepcion;
      $preregistro->Estado=$request->Estado;
      $preregistro->PersonaRecibido=$request->PersonaRecibido;
      $preregistro->Grado=$request->Grado;
      $preregistro->Observacion=$request->Observacion;

      $preregistro->FichaRegistro=$request->FichaRegistro;
      $preregistro->FotoCertificado=$request->FotoCertificado;
      $preregistro->FotoTitulo=$request->FotoTitulo;
      $preregistro->PartidaNacimiento=$request->PartidaNacimiento;
      $preregistro->CopiaDui=$request->CopiaDui;
      $preregistro->DeclaracionJurada=$request->DeclaracionJurada;
      $preregistro->CopiaDuiResponsable=$request->CopiaDuiResponsable;
      $preregistro->CertificadoOriginal=$request->CertificadoOriginal;
      $preregistro->CertificadoNotas=$request->CertificadoNotas;

      //matrícula
      $preregistro->Turno=$request->Turno;
      $preregistro->Modalidad=$request->Modalidad;
      $preregistro->Jornada=$request->Jornada;
      $preregistro->TipoIngreso=$request->TipoIngreso;
      $preregistro->Seccion=$request->Seccion;

      //Sede
      $preregistro->CodigoSede=$request->CodigoSede;
      $preregistro->Sede=$request->Sede;

      $request->validate([
        'DocumentoPdf'=>['mimes:pdf']
      ]);

      //Validando que el archivo ingresado sea con extension pdf
      if($request->hasFile('DocumentoPdf')){
        $preregistro['DocumentoPdf'] = time() . '_' . $request->file('DocumentoPdf')->getClientOriginalName();
        $request->file('DocumentoPdf')
        ->storeAs('archivos',  $preregistro['DocumentoPdf']);
      }

      $preregistro->save();
      return redirect()->route('pre.index')->with('status', 'Preregistro modificado correctamente.');//Redirecciona a vista index junto con alerta

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $preregistro=Preregistro::destroy($id);
      return redirect()->route('pre.index');
    }

    public function documentos($id)
    {
      $preregistro=Preregistro::find($id);
      return view('pre.documentos', compact('preregistro'));//Redirecciona a vista index junto con id de preregistro
    }

}
