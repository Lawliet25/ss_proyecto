@extends('layout.template')

@section('title','Formulario de preregistro')

@section('content')
<div class="container">
            <div class="row">
                <h3>Lista de alumnos preregistrados</h3>
            </div>
            <div class="row">
                <div class="col-md-10">
                    <a type="button" class="btn btn-primary btn-md" href="{{route('pre.create')}}">Nuevo preregistro</a>
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
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>NIE</th>
                            <th>Estado</th>
                            <th>Operaciones</th>
                        </tr>
                    </thead>
                    <tbody>

                    @foreach($preregistros as $preregistro)

                    <tr>
                    <td>{{$preregistro->id}}</td>
                    <td>{{$preregistro->Nombres}}</td>
                    <td>{{$preregistro->Apellidos}}</td>
                    <td>{{$preregistro->NIE}}</td>
                    <td>{{$preregistro->Estado}}</td>
                    <td><a title="Editar" class="btn btn-primary btn-circle" href=""><span class="glyphicon glyphicon-edit"></span></a>
                        <a title="Eliminar" class="btn btn-danger btn-circle" href=""><span class="glyphicon glyphicon-trash"></span></a>
                    </td>
                    </tr>
                  @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
@endsection
