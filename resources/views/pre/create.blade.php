@extends('layout.template')

@section('title','Formulario de preregistro')

@section('content')

    <div class="row">
    <div class="col-md-6 col-md-offset-3">

        <h3>Formulario de preregistro</h3>
      <form style="" action="{{route('pre.store')}}" method="POST">
        @csrf
        <div class="panel panel-info">
          <div class="panel-heading">Formulario de preregistro</div>
          <div class="panel-body">

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Nombres</label>
            <input type="text" class="form-control" id="Nombres" name="Nombres" placeholder="Digite los nombres">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Apellidos</label>
            <input type="text" class="form-control" id="Apellidos" name="Apellidos" placeholder="Digite los apellidos">
          </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputAddress">Grado al que se inscribe</label>
          <input type="text" class="form-control" id="Grado" name="Grado" placeholder="Digite el grado al que se inscribe">
        </div>
        <div class="form-group col-md-6">
          <label for="inputAddress2">NIE</label>
          <input type="text" class="form-control" id="NIE" name="NIE" placeholder="Digite el NIE">
        </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">Fecha de recepción</label>
            <input type="datetime-local" class="form-control" id="FechaRecepcion" name="FechaRecepcion">
          </div>
          <div class="form-group col-md-6">
            <label for="">DUI</label>
            <input type="text" class="form-control" id="DUI" name="DUI" placeholder="Digite el DUI">
          </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Nombre de quién recibe</label>
              <input type="text" class="form-control" id="PersonaRecibido" name="PersonaRecibido" placeholder="Digite el nombre del recepcionista">
            </div>

            <div class="form-group col-md-6">
              <label for="inputZip">Estado del estudiante</label>
              <select id="Estado" name="Estado" class="form-control">
                <option value=""></option>
                <option>Activo</option>
                <option>Inactivo</option>

              </select>

            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputPassword4">Observaciones</label>
              <textarea class="form-control" id="Observacion" name="Observacion" rows="3"></textarea>
            </div>
        </div>
        <div class="form-group">
          <div class="form-group col-md-6">
          <br>
          <input type="submit" class="btn btn-primary" value="Siguiente" name="Guardar">
          <a class="btn btn-danger" href="{{route('pre.index')}}">Cancelar</a>
          </div>
        </div>
      </div>
      </div>

    </form>
  </div>
  </div>
  @endsection
