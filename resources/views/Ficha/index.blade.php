@extends('layout.template')

@section('title','Formulario de preregistro')

@section('content')
<div class="container">
            <div class="row">
                <h3>Lista de alumnos matriculados</h3>
            </div>
            <div class="row">
                <div class="col-md-14">

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
                            <th>NIE</th>
                            <th>Nombre completo</th>
                            <th>Sección</th>
                            <th>Turno</th>
                            <th>Modalidad</th>
                            <th>Fecha de registro</th>
                            <th>Persona que recibió</th>
                            <th>Operaciones</th>

                        </tr>
                    </thead>
                    <tbody>
                    @foreach($alumnos as $alumno)
                    @endforeach
                    @foreach($data as $dato)

                    <tr>
                    <td>{{$dato->id}}</td>
                    <td>{{$dato->NIE}}</td>
                    <td>{{$dato->Nombres.' '.$dato->Apellidos}}</td>
                    <td>{{$dato->Seccion}}</td>
                    <td>{{$dato->Turno}}</td>
                    <td>{{$dato->Modalidad}}</td>
                    <td>{{$dato->FechaFR}}</td>
                    <td>{{$dato->PersonaRegistro}}</td>
                    <td><a title="Editar" class="btn btn-primary btn-circle" href="{{route('Ficha.edit', $dato->id)}}"><span class="glyphicon glyphicon-edit"></span></a>
                        <a title="Eliminar" class="btn btn-danger btn-circle" href="{{route('Ficha.destroy', $dato->id)}}"><span class="glyphicon glyphicon-trash"></span></a>

                    </td>

                    </tr>

                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
@endsection
