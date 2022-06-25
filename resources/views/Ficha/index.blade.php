@extends('layout.template')

@section('title','Formulario de preregistro')

@section('content')
<div class="container">
            <div class="row">
                <h3>Lista de alumnos matriculados</h3>
            </div>
            <div class="row">
                <div class="col-md-12">

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
                            <th>Turno</th>
                            <th>Modalidad</th>
                            <th>Fecha de nacimiento</th>
                            <th>Fecha de registro</th>
                            <th>Persona que recibió</th>
                            <th>ID de preregistrado</th>
                            <th>Operaciones</th>
                        </tr>
                    </thead>
                    <tbody>

                    @foreach($alumnos as $alumno)

                    <tr>
                    <td>{{$alumno->id}}</td>
                    <td>{{$alumno->Sexo}}</td>
                    <td>{{$alumno->Seccion}}</td>
                    <td>{{$alumno->Turno}}</td>
                    <td>{{$alumno->Modalidad}}</td>
                    <td>{{$alumno->FechaNacimiento}}</td>
                    <td>{{$alumno->FechaFR}}</td>
                    <td>{{$alumno->PersonaRegistro}}</td>
                    <td>{{$alumno->id_preregistro}}</td>
                    <td><a title="Editar" class="btn btn-primary btn-circle" href="{{route('Ficha.edit', $alumno->id, $alumno->id_preregistro)}}"><span class="glyphicon glyphicon-edit"></span></a>
                        <a title="Eliminar" class="btn btn-danger btn-circle" href="{{route('Ficha.destroy', $alumno->id)}}"><span class="glyphicon glyphicon-trash"></span></a></td>
                    </tr>
                  @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
@endsection
