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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
