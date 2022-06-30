@extends('layout.template')

@section('title','Reporte de alumnos')

@section('content')
<div class="container">

            <div class="row">
              <div class="form-group col-md-3">
                  <form class="" action="" method="">
                  <label for="username">Tipo de reporte</label>
                  <select class="form-control" name="tipo">
                    <option></option>
                    <option value="GradoMatricular">Grado</option>
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
            </div><hr>

            <div class="">
              @if($buscar)
              <div class="alert alert-warning" role="alert">
              <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
              El reporte incluirá la siguiente información basado en el filtro solicitado: "{{$buscar}}":
              </div>
                <h3>Lista de alumnos</h3>
            </div>
            <div class="row">
                <div class="col-md-12">

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
                            <th>DUI</th>
                            <th>Nombre completo</th>
                            <th>Sexo</th>
                            <th>Email</th>
                            <th>Grado</th>
                            <th>Sección</th>
                            <th>Turno</th>
                            <th>Sede</th>

                        </tr>
                    </thead>
                    <tbody>

                    @foreach($data as $dato)

                    <tr>
                    <td>{{$dato->id}}</td>
                    <td>{{$dato->NIE}}</td>
                    <td>{{$dato->DUI}}</td>
                    <td>{{$dato->Nombres.' '.$dato->Apellidos}}</td>
                    <td>{{$dato->Sexo}}</td>
                    <td>{{$dato->Email}}</td>
                    <td>{{$dato->GradoMatricular}}</td>
                    <td>{{$dato->Seccion}}</td>
                    <td>{{$dato->Turno}}</td>
                    <td>{{$dato->Sede}}</td>
                    </tr>

                    @endforeach
                    </tbody>
                </table>
                <a href="{{route('reportes.pdf')}}" class="btn btn-primary">Generar PDF</a>
                {{$data->links('pagination::bootstrap-4')}}
                </div>
            </div>
            @endif
        </div>
@endsection
