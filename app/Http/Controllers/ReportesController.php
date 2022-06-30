<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DatosAlumno;
use App\Models\Preregistro;
use App\Models\SedesModel;

class ReportesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $buscar = $request->get('buscarpor');
      $tipo = $request->get('tipo');
      $data = Preregistro::join('datosalumnofr', 'preregistro.id', 'datosalumnofr.id_preregistro')
              ->select('datosalumnofr.id','preregistro.NIE', 'preregistro.Nombres', 'preregistro.Apellidos',
                'datosalumnofr.Seccion', 'datosalumnofr.Modalidad','preregistro.DUI', 'datosalumnofr.Turno',
                'datosalumnofr.Sede','datosalumnofr.Sexo','datosalumnofr.Email','datosalumnofr.GradoMatricular')
              ->Buscarpor($tipo, $buscar)
              ->paginate(5);

               return view('reportes.index',['buscar'=>$buscar],['data'=>$data]);
    }
    public function pdf(Request $request)
    {
      $buscar = $request->get('buscarpor');
      $tipo = $request->get('tipo');
      $data = Preregistro::join('datosalumnofr', 'preregistro.id', 'datosalumnofr.id_preregistro')
              ->select('datosalumnofr.id','preregistro.NIE', 'preregistro.Nombres', 'preregistro.Apellidos',
                'datosalumnofr.Seccion', 'datosalumnofr.Modalidad','preregistro.DUI', 'datosalumnofr.Turno',
                'datosalumnofr.Sede','datosalumnofr.Sexo','datosalumnofr.Email','datosalumnofr.GradoMatricular')

              ->paginate(5);

               return view('reportes.pdf',['data'=>$data],['buscar'=>$buscar]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
