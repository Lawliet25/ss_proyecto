@extends('layout.template')

@section('title','Sedes registradas')

@section('content')
<div class="container">

            <div class="row">
                <div class="col-md-10">
                    <h3>Lista de sedes registradas</h3>
                    <a type="button" class="btn btn-primary btn-md" href="{{route('sedes.create')}}">Nueva sede</a>
                <br>
                @if (session('status'))
                  <div class="alert alert-success">
                    {{session('status')}}
                  </div>
                @endif

                <br>
                <table class="table table-striped table-bordered table-hover" id="tabla" style="text-align:center">
                    <thead >
                        <tr>
                            <th style="text-align:center">ID</th>
                            <th style="text-align:center">Código de sede</th>
                            <th style="text-align:center">Nombre de sede</th>
                            <th style="text-align:center">Departamento</th>
                            <th style="text-align:center">Municipio</th>
                            <th style="text-align:center">Operaciones</th>
                        </tr>
                    </thead>
                    <tbody>

                    @foreach($sedes as $sede)

                    <tr>
                    <td>{{$sede->id}}</td>
                    <td>{{$sede->CodigoSede}}</td>
                    <td>{{$sede->Sede}}</td>
                    <td>{{$sede->Departamento}}</td>
                    <td>{{$sede->Municipio}}</td>
                    <td><a title="Editar" class="btn btn-primary btn-circle" href="{{route('sedes.edit', $sede->id)}}"><span class="glyphicon glyphicon-edit"></span></a>
                        <a title="Eliminar" class="btn btn-danger btn-circle" href="{{route('sedes.destroy', $sede->id)}}"><span class="glyphicon glyphicon-trash"></span></a>
                    </td>

                    </tr>
                  @endforeach
                    </tbody>
                </table>
                {{$sedes->links('pagination::bootstrap-4')}}
                </div>
            </div>
        </div>
@endsection
