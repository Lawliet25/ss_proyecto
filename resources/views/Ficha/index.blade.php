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
                    <option value="NombresEncargado">Nombre Encargado</option>
                    <option value="PersonaRegistro">Persona que registró</option>
                    <option value="FechaFR">Fecha de registro</option>
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
              <a type="button" class="btn btn-danger" href="{{route('Ficha.index')}}">Ver todos los registros</a><br><br>
              <div class="alert alert-info" role="alert">
              <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
              Los resultados para tu búsqueda "{{$buscar}}" son:
              </div>@endif
              <h3>Lista de información de alumnos</h3>
              <a type="button" class="btn btn-danger" href="../../public/exportar/alumnos">Descargar reporte global
                <span class="glyphicon glyphicon-download-alt"></span>
              </a><br><br>
            </div>
            <div class="">
                <div class="col-md-13">
                @if (session('status'))
                  <div class="alert alert-success">
                  <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span>
                    {{session('status')}}
                  </div>
                @endif
                <table class="table table-striped table-bordered table-hover" id="tabla" style="text-align:center">
                    <thead>
                        <tr>
                            <th style="text-align:center">Nombre completo</th>
                            <th style="text-align:center">Fecha de nacimiento</th>
                            <th style="text-align:center">Celular</th>
                            <th style="text-align:center">Encargado</th>
                            <th style="text-align:center">Persona que registró</th>
                            <th style="text-align:center">Fecha de matrícula</th>
                            <th style="text-align:center">Operaciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $dato)
                    <tr>
                    <td>{{$dato->Nombres.' '.$dato->Apellidos}}</td>
                    <td>{{$dato->FechaNacimiento}}</td>
                    <td>{{$dato->Celular}}</td>
                    <td>{{$dato->NombresEncargado. ' '.$dato->ApellidosEncargado}}</td>
                    <td>{{$dato->PersonaRegistro}}</td>
                    <td>{{$dato->FechaFR}}</td>
                    <td><a title="Editar" class="btn btn-primary btn-circle" href="{{route('Ficha.edit', $dato->id)}}"><span class="glyphicon glyphicon-edit"></span></a>
                        <!--a title="Eliminar" class="btn btn-danger btn-circle" href="{{route('Ficha.destroy', $dato->id)}}"><span class="glyphicon glyphicon-trash"></span></a-->
                        <a title="Ver ficha" class="btn btn-warning btn-circle" href="{{route('Ficha.verFR', $dato->id)}}"><span class="glyphicon glyphicon-eye-open"></span>
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
