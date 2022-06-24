@extends('layout.template')

@section('title','Formulario de preregistro')

@section('content')
<div class="container">
            <div class="row">
                <h3>Lista de alumnos matriculados</h3>
            </div>
            <div class="row">
                <div class="col-md-10">
                    <a type="button" class="btn btn-primary btn-md" href="#">Nuevo preregistro</a>
                <br>
                @if (session('status'))
                  <div class="alert alert-success">
                    {{session('status')}}
                  </div>
                @endif

                <br>
                <table class="table table-striped table-bordered table-hover" id="tabla">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Sexo</th>
                            <th>Sección</th>
                            <th>Fecha de nacimiento</th>
                            <th>Nacionalidad</th>
                            <th>ID_Preregistrado</th>
                            <th>Operaciones</th>
                        </tr>
                    </thead>
                    <tbody>

                    @foreach($alumnos as $alumno)

                    <tr>
                    <td>{{$alumno->id}}</td>
                    <td>{{$alumno->Sexo}}</td>
                    <td>{{$alumno->Seccion}}</td>
                    <td>{{$alumno->FechaNacimiento}}</td>
                    <td>{{$alumno->Nacionalidad}}</td>
                    <td>{{$alumno->id_preregistro}}</td>
                    </tr>
                  @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
@endsection
