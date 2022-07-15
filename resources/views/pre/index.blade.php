@extends('layout.template')

@section('title','Preregistro')

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

                <div class="col-md-11">
                  <hr>

                  @if($buscar)
                  <a type="button" class="btn btn-danger" href="{{route('pre.index')}}">Ver todos los registros</a><br><br>
                  <div class="alert alert-info" role="alert">
                  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                  Los resultados para tu búsqueda "{{$buscar}}" son:
                  </div>@endif

                  <h3>Lista de alumnos preregistrados</h3>
                    <a type="button" class="btn btn-primary btn-md" href="{{route('pre.create')}}">Nuevo preregistro</a>
                <br><br>
                @if (session('status'))
                  <div class="alert alert-success">
                    <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span>
                    {{session('status')}}
                  </div>
                @endif

                <table class="table table-striped table-bordered table-hover" id="tabla" style="text-align:center">
                    <thead>
                        <tr>
                            <th style="text-align:center">ID</th>
                            <th style="text-align:center">Nombres</th>
                            <th style="text-align:center">Apellidos</th>
                            <th style="text-align:center">NIE</th>
                            <th style="text-align:center">Grado</th>
                            <th style="text-align:center">Sede</th>
                            <th style="text-align:center">Año de matrícula</th>
                            <th style="text-align:center">Operaciones</th>
                            <th style="text-align:center">Ficha de matrícula</th>
                        </tr>
                    </thead>
                    <tbody>

                    @foreach($preregistros as $preregistro)

                    <tr>
                    <td>{{$preregistro->id}}</td>
                    <td>{{$preregistro->Nombres}}</td>
                    <td>{{$preregistro->Apellidos}}</td>
                    <td>{{$preregistro->NIE}}</td>
                    <td>{{$preregistro->Grado}}</td>
                    <td>{{$preregistro->Sede}}</td>
                    <td>{{$preregistro->Año}}</td>
                    <td><a title="Editar" class="btn btn-primary btn-circle" href="{{route('pre.edit', $preregistro->id)}}"><span class="glyphicon glyphicon-edit"></span></a>
                        <!--a title="Eliminar" class="btn btn-danger btn-circle" href="{{route('pre.destroy', $preregistro->id)}}"><span class="glyphicon glyphicon-trash"></span></a-->
                        <a title="Añadir documentos" class="btn btn-success btn-circle" href="{{route('pre.documentos', $preregistro->id)}}"><span class="	glyphicon glyphicon-file"></span></a>
                        <?php if ((($preregistro->DocumentoPdf)!=null) && ($preregistro->DocumentoPdf)!='-'): ?>
                        <a title="Ver documento" class="btn btn-warning btn-circle" target="_blank" href="../../storage/app/public/archivos/{{$preregistro->DocumentoPdf}}"><span class="	glyphicon glyphicon-eye-open"></span></a>
                        <?php endif; ?>

                    </td>
                    <td>
                      <a class="btn btn-danger" href="{{route('Ficha.create',$preregistro->id)}}" role="button">Registro de ficha</a>
                    </td>
                    </tr>
                  @endforeach
                    </tbody>
                </table>
                {{$preregistros->links('pagination::bootstrap-4')}}
                </div>
            </div>
        </div>
@endsection
