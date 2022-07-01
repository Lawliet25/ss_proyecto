@extends('layout.template')

@section('title','Formulario de editar preregistro')

@section('content')

    <div class="row">
    <div class="col-md-8 col-md-offset-1">
      <h3>Editar información del alumno</h3>
        <h3>Formulario de preregistro</h3>
      <form style="" action="{{route('pre.update',$preregistro->id)}}" method="POST">
        @csrf
        <div class="panel panel-info">
          <div class="panel-heading">Formulario de preregistro</div>
          <div class="panel-body">

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Nombres</label>
            <input value="{{$preregistro->Nombres}}" type="text" class="form-control" id="Nombres" name="Nombres" placeholder="Digite los nombres">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Apellidos</label>
            <input value="{{$preregistro->Apellidos}}" type="text" class="form-control" id="Apellidos" name="Apellidos" placeholder="Digite los apellidos">
          </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputAddress">Grado al que se inscribe</label>
          <select id="Grado" name="Grado" class="form-control" value="{{$preregistro->Grado}}">
            <option>{{$preregistro->Grado}}</option>
            <option>7° grado</option>
            <option>8° grado</option>
            <option>9° grado</option>
            <option>1er año</option>
            <option>2do año</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="inputAddress2">NIE</label>
          <input value="{{$preregistro->NIE}}" type="text" class="form-control" id="NIE" name="NIE" placeholder="Digite el NIE">
        </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">Fecha de recepción</label>
            <input value="{{$preregistro->FechaRecepcion}}"  class="form-control" id="FechaRecepcion" name="FechaRecepcion">
          </div>
          <div class="form-group col-md-6">
            <label for="">DUI</label>
            <input value="{{$preregistro->DUI}}" type="text" class="form-control" id="DUI" name="DUI" placeholder="Digite el DUI">
          </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Nombre de quién recibe</label>
              <input value="{{$preregistro->PersonaRecibido}}" type="text" class="form-control" id="PersonaRecibido" name="PersonaRecibido" placeholder="Digite el nombre del recepcionista">
            </div>

            <div class="form-group col-md-6">
              <label for="inputZip">Estado del estudiante</label>
              <select  id="Estado" name="Estado" class="form-control">
                <option>{{$preregistro->Estado}}</option>
                <option>Aprobado</option>
                <option>Reprobado</option>

              </select>

            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputPassword4">Observaciones</label>
              <textarea class="form-control" id="Observacion" name="Observacion" rows="3">
                {{$preregistro->Observacion}}
              </textarea>
            </div>
        </div>
        <div class="form-group">
          <div class="form-group col-md-6">
          <br>
          <input type="submit" class="btn btn-primary" value="Actualizar" name="Guardar">
          <a class="btn btn-danger" href="{{route('pre.index')}}">Cancelar</a>
          </div>
        </div>
      </div>
      </div>

    </form>
  </div>
  </div>
  @endsection
