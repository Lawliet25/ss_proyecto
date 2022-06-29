<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SedesModel;

class SedesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $sedes=SedesModel::paginate(10);
          return view('sedes.index',['sedes'=>$sedes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $sede=SedesModel::all();
      return view('sedes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $sede= new SedesModel();

      $sede->CodigoSede=$request->CodigoSede;
      $sede->Sede=$request->Sede;
      $sede->Departamento=$request->Departamento;
      $sede->Municipio=$request->Municipio;
      $sede->save();
      return redirect()->route('sedes.index');
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
      $sede=SedesModel::find($id);
      return view('sedes.edit', compact('sede'));
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
      $sede= SedesModel::find($id);

      $sede->CodigoSede=$request->CodigoSede;
      $sede->Sede=$request->Sede;
      $sede->Departamento=$request->Departamento;
      $sede->Municipio=$request->Municipio;
      $sede->save();
      return redirect()->route('sedes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $sede=SedesModel::destroy($id);
      return redirect()->route('sedes.index');
    }
}
