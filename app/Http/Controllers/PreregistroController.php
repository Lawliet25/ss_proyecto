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
      /*if ($request) {
        $query = trim($request->get('search'));
        $preregistros = Preregistro::where('Nombres','LIKE','%'.$query.'%')
        ->orderBy('id', 'asc')
        ->paginate(5);
        return view('pre.index',['preregistros'=>$preregistros], ['search'=>$query]);*/
        $buscar = $request->get('buscarpor');
        $tipo = $request->get('tipo');
        $preregistros = Preregistro::Buscarpor($tipo, $buscar)->paginate(5);
        return view('pre.index',['preregistros'=>$preregistros],['buscar'=>$buscar]);
      }
      //$preregistros=Preregistro::paginate(5);
      //$alumnos= DatosAlumno::all();
      //return view('pre.index',['preregistros'=>$preregistros]);

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
      $request->validate([
        'Nombres'=>['required','string'],
        'Apellidos'=>['required','string'],
        'NIE'=>['unique:preregistro', 'required'],
        'DUI'=>['required', 'regex: /^[0-9]{8}-[0-9]{1}/','unique:preregistro'],
        'FechaRecepcion'=>'required',
        'Estado'=>'required',
        'PersonaRecibido'=>'required',
        'Grado'=>'required'
      ]);

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
      $preregistro->CopiaDui=$request->CopiaDui;
      $preregistro->DeclaracionJurada=$request->DeclaracionJurada;
      $preregistro->CopiaDuiResponsable=$request->CopiaDuiResponsable;
      $preregistro->CertificadoOriginal=$request->CertificadoOriginal;
      $preregistro->CertificadoNotas=$request->CertificadoNotas;

      $request->validate([
        'DocumentoPdf'=>['mimes:pdf']
      ]);

      if($request->hasFile('DocumentoPdf')){
        $preregistro['DocumentoPdf'] = time() . '_' . $request->file('DocumentoPdf')->getClientOriginalName();
        $request->file('DocumentoPdf')
        ->storeAs('archivos',  $preregistro['DocumentoPdf']);
      }

      $preregistro->save();
      return redirect()->route('pre.index');
      return redirect()->route('editoriales.index')->with('status', alertify.success('Success notification message.'));

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

}
