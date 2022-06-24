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
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>NIE</th>
                            <th>Estado</th>
                            <th>Operaciones</th>
                            <th>Ficha de matrícula</th>
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
                    <!--td><a title="Editar" class="btn btn-primary btn-circle" href="{{route('pre.edit', $preregistro->id)}}"><span class="glyphicon glyphicon-edit"></span></a>
                        <a title="Eliminar" class="btn btn-danger btn-circle" href="{{route('pre.destroy', $preregistro->id)}}"><span class="glyphicon glyphicon-trash"></span></a>
                        <a title="Añadir documentos" class="btn btn-success btn-circle" href="{{route('pre.documentos', $preregistro->id)}}"><span class="	glyphicon glyphicon-file"></span></a>
                        <?php //if (($preregistro->DocumentoPdf)!=null): ?>
                        <a title="Ver documento" class="btn btn-warning btn-circle" href="../../storage/app/public/archivos/{{$preregistro->DocumentoPdf}}"><span class="	glyphicon glyphicon-eye-open"></span></a>
                        <?php //endif; ?>

                    </td-->
                    <!--th><a class="btn btn-primary" href="{{route('Ficha.Fichagrande',$preregistro->id)}}" role="button">Registro de ficha</a></th-->
                    </td>
                    </tr>
                  @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
@endsection
