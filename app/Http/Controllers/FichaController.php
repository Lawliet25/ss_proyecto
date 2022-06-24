<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DatosAlumno;
use App\Models\Preregistro;

class FichaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $alumnos=DatosAlumno::all();
      return view('Ficha.index',['alumnos'=>$alumnos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //$preregistro=Preregistro::find($id);
        return view('Ficha.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Alumnosfr
        $alumno= new Alumno();

        $alumno->Sexo=$request->Nombres;
        $alumno->FechaNacimiento=$request->FechaNacimiento;
        $alumno->Nacionalidad=$request->Nacionalidad;
        $alumno->EstadoFamiliar=$request->EstadoFamiliar;
        $alumno->MedioTransporte=$request->MedioTransporte;
        $alumno->save();
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
