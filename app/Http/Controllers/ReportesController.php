<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DatosAlumno;
use App\Models\Preregistro;
use App\Models\SedesModel;
use PDF;
class ReportesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      /* Se crea vista index con los componentes de filtro 
      y en la data se hace una consulta join para mostrar los datos en una tabla */
      $buscar = $request->get('buscarpor');
      $tipo = $request->get('tipo');
      $data = Preregistro::join('datosalumnofr', 'preregistro.id', 'datosalumnofr.id_preregistro')
              ->select('datosalumnofr.id','preregistro.NIE', 'preregistro.Nombres', 'preregistro.Apellidos',
                'datosalumnofr.Seccion', 'datosalumnofr.Modalidad','preregistro.DUI', 'datosalumnofr.Turno',
                'datosalumnofr.Sede','datosalumnofr.Sexo','datosalumnofr.Email','datosalumnofr.GradoMatricular')
              ->Buscarpor($tipo, $buscar)
              ->paginate(500);

               return view('reportes.index',['buscar'=>$buscar],['data'=>$data]);
    }
    /* Generando pdf de septimo grado */
    public function pdf7()
    {

      $data = Preregistro::join('datosalumnofr', 'preregistro.id', 'datosalumnofr.id_preregistro')
              ->select('datosalumnofr.id','preregistro.NIE', 'preregistro.Nombres', 'preregistro.Apellidos',
                'datosalumnofr.Seccion', 'datosalumnofr.Modalidad','preregistro.DUI', 'datosalumnofr.Turno',
                'datosalumnofr.Sede','datosalumnofr.Sexo','datosalumnofr.Email','datosalumnofr.GradoMatricular')
              ->where('GradoMatricular', 'LIKE', '7° grado')
              ->paginate(500);
              $pdf = PDF::loadView('reportes.pdf',['data'=>$data]);
              return $pdf->stream();

    }
    /* Generando pdf de octavo grado */
    public function pdf8()
    {

      $data = Preregistro::join('datosalumnofr', 'preregistro.id', 'datosalumnofr.id_preregistro')
              ->select('datosalumnofr.id','preregistro.NIE', 'preregistro.Nombres', 'preregistro.Apellidos',
                'datosalumnofr.Seccion', 'datosalumnofr.Modalidad','preregistro.DUI', 'datosalumnofr.Turno',
                'datosalumnofr.Sede','datosalumnofr.Sexo','datosalumnofr.Email','datosalumnofr.GradoMatricular')
              ->where('GradoMatricular', 'LIKE', '8° grado')
              ->paginate(500);
              $pdf = PDF::loadView('reportes.pdf',['data'=>$data]);
              return $pdf->stream();

    }
    /* Generando pdf de noveno grado */
    public function pdf9()
    {

      $data = Preregistro::join('datosalumnofr', 'preregistro.id', 'datosalumnofr.id_preregistro')
              ->select('datosalumnofr.id','preregistro.NIE', 'preregistro.Nombres', 'preregistro.Apellidos',
                'datosalumnofr.Seccion', 'datosalumnofr.Modalidad','preregistro.DUI', 'datosalumnofr.Turno',
                'datosalumnofr.Sede','datosalumnofr.Sexo','datosalumnofr.Email','datosalumnofr.GradoMatricular')
              ->where('GradoMatricular', 'LIKE', '9° grado')
              ->paginate(500);
              $pdf = PDF::loadView('reportes.pdf',['data'=>$data]);
              return $pdf->stream();

    }
    /* Generando pdf de primer año */
    public function pdf1()
    {

      $data = Preregistro::join('datosalumnofr', 'preregistro.id', 'datosalumnofr.id_preregistro')
              ->select('datosalumnofr.id','preregistro.NIE', 'preregistro.Nombres', 'preregistro.Apellidos',
                'datosalumnofr.Seccion', 'datosalumnofr.Modalidad','preregistro.DUI', 'datosalumnofr.Turno',
                'datosalumnofr.Sede','datosalumnofr.Sexo','datosalumnofr.Email','datosalumnofr.GradoMatricular')
              ->where('GradoMatricular', 'LIKE', '1er año')->orWhere('GradoMatricular','LIKE','PRIMER AÑO')
              ->paginate(1000);
              $pdf = PDF::loadView('reportes.pdf',['data'=>$data]);
              return $pdf->stream();
    }
    /* Generando pdf de segundo año */
    public function pdf2()
    {

      $data = Preregistro::join('datosalumnofr', 'preregistro.id', 'datosalumnofr.id_preregistro')
              ->select('datosalumnofr.id','preregistro.NIE', 'preregistro.Nombres', 'preregistro.Apellidos',
                'datosalumnofr.Seccion', 'datosalumnofr.Modalidad','preregistro.DUI', 'datosalumnofr.Turno',
                'datosalumnofr.Sede','datosalumnofr.Sexo','datosalumnofr.Email','datosalumnofr.GradoMatricular')
              ->where('GradoMatricular', 'LIKE', '2do año')->orWhere('GradoMatricular','LIKE','SEGUNDO AÑO')
              ->paginate(1000);
              $pdf = PDF::loadView('reportes.pdf',['data'=>$data]);
              return $pdf->stream();
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
