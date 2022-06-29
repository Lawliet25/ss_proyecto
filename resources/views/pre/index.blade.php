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

                <div class="col-md-12">
                  <hr>

                  @if($buscar)
                  <a type="button" class="btn btn-danger" href="{{route('pre.index')}}">Ver todos los registros</a><br><br>
                  <div class="alert alert-info" role="alert">
                  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                  Los resultados para tu búsqueda "{{$buscar}}" son:
                  </div>@endif

                  <h3>Lista de alumnos preregistrados</h3>
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
                            <th>Ficha de matrícula</th>
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
                    <td><a title="Editar" class="btn btn-primary btn-circle" href="{{route('pre.edit', $preregistro->id)}}"><span class="glyphicon glyphicon-edit"></span></a>
                        <a title="Eliminar" class="btn btn-danger btn-circle" href="{{route('pre.destroy', $preregistro->id)}}"><span class="glyphicon glyphicon-trash"></span></a>
                        <a title="Añadir documentos" class="btn btn-success btn-circle" href="{{route('pre.documentos', $preregistro->id)}}"><span class="	glyphicon glyphicon-file"></span></a>
                        <?php if (($preregistro->DocumentoPdf)!=null): ?>
                        <a title="Ver documento" class="btn btn-warning btn-circle" href="../../storage/app/public/archivos/{{$preregistro->DocumentoPdf}}"><span class="	glyphicon glyphicon-eye-open"></span></a>
                        <?php endif; ?>

                    </td>
                    <th>
                      <a class="btn btn-primary" href="{{route('Ficha.create',$preregistro->id)}}" role="button">Registro de ficha</a></th>
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
