@extends('layout.template')

@section('title','Alumnos matriculados')

@section('content')
<div class="container">

  <div class="row">
      <div class="form-group col-md-3">
        <form class="" action="" method="">
        <label for="username">Filtros de búsqueda</label>
        <select class="form-control" name="tipo">
          <option></option>
          <option>Nombres</option>
          <option>Apellidos</option>
          <option>NIE</option>
        </select>
      </div>
      <div class="form-group col-md-3" style="margin-top:25px;">
        <input type="text" name="buscarpor" placeholder="Búsqueda" class="form-control">
      </div>
      <div class="form-group col-md-3">
        <button type="submit" class="btn btn-warning" value="Buscar" name="Filtrar" style="margin-top:25px;">
        <span class="glyphicon glyphicon-search"></span>
      </form>
    </div>
  </div>

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
                            <th>Grado</th>
                            <th>Sección</th>
                            <th>Turno</th>
                            <th>Modalidad</th>
                            <th>Sede</th>
                            <th>Fecha de registro</th>
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
                    <td>{{$dato->GradoMatricular}}</td>
                    <td>{{$dato->Seccion}}</td>
                    <td>{{$dato->Turno}}</td>
                    <td>{{$dato->Modalidad}}</td>
                    <td>{{$dato->Sede}}</td>
                    <td>{{$dato->FechaFR}}</td>

                    <td><a title="Editar" class="btn btn-primary btn-circle" href="{{route('Ficha.edit', $dato->id)}}"><span class="glyphicon glyphicon-edit"></span></a>
                        <a title="Eliminar" class="btn btn-danger btn-circle" href="{{route('Ficha.destroy', $dato->id)}}"><span class="glyphicon glyphicon-trash"></span></a>

                    </td>

                    </tr>

                    @endforeach
                    </tbody>
                </table>
                {{$data->links('pagination::bootstrap-4')}}
                </div>
            </div>
        </div>
@endsection
