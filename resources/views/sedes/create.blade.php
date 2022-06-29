@extends('layout.template')

@section('title','Formulario de sedes')

@section('content')

    <div class="row">
    <div class="col-md-8 col-md-offset-1">

        <h3>Formulario de sedes</h3>
      <form style="" action="{{route('pre.store')}}" method="POST">
        @csrf
        <div class="panel panel-info">
          <div class="panel-heading">Formulario para crear sede</div>
          <div class="panel-body" >

        <div class="form-group" style="margin-bottom:95px;">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Código de sede</label>
            <input type="text" class="form-control" id="CodigoSede" name="CodigoSede" placeholder="Digite el codigo de la sede">

          </div>

          <div class="form-group col-md-6">
            <label for="inputPassword4">Nombre de sede</label>
            <input type="text" class="form-control" id="Sede" name="Sede" placeholder="Nombre de sede">

          </div>

        </div>
        <div class="form-row" style="margin-bottom:190px">
        <div class="form-group col-md-6">
          <label for="inputAddress">Departamento</label>
          <select class="form-control" name="Departamento">
            <option>Seleccionar</option>
            <?php
             $query = $db->prepare("SELECT * FROM departamento");
             $query->execute();
             $data = $query->fetchAll();

             foreach ($data as $valores):
             echo '<option value="'.$valores["id"].'">'.$valores["Departamento"].'</option>';
             endforeach;
             ?>
          </select>

        </div>
        <div class="form-group col-md-6">
          <label for="inputAddress2">NIE</label>
          <input type="text" class="form-control" id="NIE" name="NIE" placeholder="Digite el NIE" value="{{old('NIE')}}">

        </div>
        </div>
        <div class="form-row" style="margin-bottom:285px">
          <div class="form-group col-md-6">
            <label for="inputCity">Fecha de recepción</label>
            <input type="datetime-local" class="form-control" id="FechaRecepcion" name="FechaRecepcion" value="{{old('FechaRecepcion')}}">

          </div>
          <div class="form-group col-md-6">
            <label for="">DUI</label>
            <input type="text" class="form-control" id="DUI" name="DUI" placeholder="Digite el DUI" value="{{old('DUI')}}">

          </div>
          </div>

          <div class="form-row" style="margin-bottom:380px">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Nombre de quién recibe</label>
              <input type="text" class="form-control" id="PersonaRecibido" name="PersonaRecibido" placeholder="Digite el nombre del recepcionista" value="{{old('PersonaRecibido')}}">
              @error ('PersonaRecibido')
                <span class="error text-danger">{{$message}}</span>
              @enderror
            </div>

            <div class="form-group col-md-6">
              <label for="inputZip">Estado del estudiante</label>
              <select id="Estado" name="Estado" class="form-control">
                <option>{{old('Estado')}}</option>
                <option>Activo</option>
                <option>Inactivo</option>

              </select>
              @error ('Estado')
                <span class="error text-danger">{{$message}}</span>
              @enderror
            </div>
          </div>
            <div class="form-row" style="margin-bottom:100px">
            <div class="form-group col-md-6">
              <label for="inputPassword4">Observaciones</label>
              <textarea class="form-control" id="Observacion" name="Observacion" rows="3"></textarea>
            </div>

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
