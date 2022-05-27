@extends('layout.template')

@section('title','Formulario de preregistro')

@section('content')

    <div class="row">
    <div class="col-md-6 col-md-offset-3">

        <h3>Formulario de preregistro</h3>
      <form style="">
        <div class="panel panel-warning">
          <div class="panel-heading">Formulario de preregistro</div>
          <div class="panel-body">

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Nombres</label>
            <input type="text" class="form-control" id="nombres" placeholder="Digite los nombres">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Apellidos</label>
            <input type="text" class="form-control" id="apellidos" placeholder="Digite los apellidos">
          </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputAddress">Grado al que se inscribe</label>
          <input type="text" class="form-control" id="grado" placeholder="Digite el grado al que se inscribe">
        </div>
        <div class="form-group col-md-6">
          <label for="inputAddress2">NIE</label>
          <input type="number" class="form-control" id="nie" placeholder="Digite el NIE">
        </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">Fecha de recepción</label>
            <input type="datetime-local" class="form-control" id="fecha_recepcion">
          </div>
          <div class="form-group col-md-6">
            <label for="">Sección a la que está inscrito</label>
            <input type="text" class="form-control" id="seccion" placeholder="Digite la sección a la que está inscrito">
          </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Nombre de quién recibe</label>
              <input type="text" class="form-control" id="nombre_recepcionista" placeholder="Digite el nombre del recepcionista">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Nombre de quién entrega</label>
              <input type="text" class="form-control" id="apellidos" placeholder="Digite el nombre de quién entrega">
            </div>
          </div>
          <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputZip">Estado del estudiante</label>
            <select class="form-control">
              <option value=""></option>
              <option value="">Activo</option>
              <option value="">Inactivo</option>

            </select>
          </div>
        </div>
        <div class="form-group">
          <div class="form-group col-md-6">
          <br>
          <button type="submit" class="btn btn-primary">Siguiente</button>
          <button type="submit" class="btn btn-danger">Cancelar</button>
          </div>
        </div>
      </div>
      </div>

    </form>
  </div>
  </div>
  @endsection
