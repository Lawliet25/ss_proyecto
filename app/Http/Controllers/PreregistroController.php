<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Preregistro;

class PreregistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $preregistros=Preregistro::all();
      return view('pre.index',['preregistros'=>$preregistros]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
      $preregistro->save();
      return redirect()->route('pre.index');
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
      $preregistro->CopiaDUI=$request->CopiaDUI;
      $preregistro->DeclaracionJurada=$request->DeclaracionJurada;
      $preregistro->CopiaDUIResponsable=$request->CopiaDUIResponsable;
      $preregistro->CertificadoOriginal=$request->CertificadoOriginal;
      $preregistro->CertificadoNotas=$request->CertificadoNotas;
      $preregistro->save();
      return redirect()->route('pre.index');

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
      return view('pre.documentos', compact('preregistro'));
    }
  /*public function documentosup(Request $request,$id)
    {
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
      $preregistro->CopiaDUI=$request->CopiaDUI;
      $preregistro->DeclaracionJurada=$request->DeclaracionJurada;
      $preregistro->CopiaDUIResponsable=$request->CopiaDUIResponsable;
      $preregistro->CertificadoOriginal=$request->CertificadoOriginal;
      $preregistro->CertificadoNotas=$request->CertificadoNotas;
      $preregistro->save();
      return redirect()->route('pre.documentos');

    }*/

}
