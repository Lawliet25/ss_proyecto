@extends('layout.template')

@section('title','Formulario de preregistro')

@section('content')

    <div class="row">
    <div class="col-md-8 col-md-offset-1">

        <h3>Formulario de preregistro</h3>
      <form style="" action="{{route('pre.store')}}" method="POST">
        @csrf
        <div class="panel panel-info">
          <div class="panel-heading">Formulario de preregistro</div>
          <div class="panel-body" >

           <!---Primera fila"--->
        <div class="form-group" style="margin-bottom:95px;">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Nombres</label>
            <input type="text" class="form-control" id="Nombres" name="Nombres" placeholder="Digite los nombres" value="{{old('Nombres')}}">

            @error ('Nombres')
              <span class="error text-danger">{{$message}}</span>
            @enderror
          </div>

          <div class="form-group col-md-6">
            <label for="inputPassword4">Apellidos</label>
            <input type="text" class="form-control" id="Apellidos" name="Apellidos" placeholder="Digite los apellidos" value="{{old('Apellidos')}}">

            @error ('Apellidos')
              <span class="error text-danger">{{$message}}</span>
            @enderror
          </div>
        </div>
        <!---Segunda fila"--->
        <div class="form-row" style="margin-bottom:190px">
        <div class="form-group col-md-6">
          <label for="inputAddress">Grado al que se inscribe</label>
          <select id="Grado" name="Grado" class="form-control">
            <option>{{old('Grado')}}</option>
            <option>7° GRADO</option>
            <option>8° GRADO</option>
            <option>9° GRADO</option>
            <option>PRIMER AÑO</option>
            <option>SEGUNDO AÑO</option>
          </select>
          @error ('Grado')
            <span class="error text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group col-md-6">
          <label for="inputAddress2">NIE</label>
          <input type="text" class="form-control" id="NIE" name="NIE" placeholder="Digite el NIE" value="{{old('NIE')}}">
          @error ('NIE')
            <span class="error text-danger">{{$message}}</span>
          @enderror
        </div>
        </div>
        <!---Tercera fila"--->
        <div class="form-row" style="margin-bottom:285px">
          <div class="form-group col-md-6">
            <label for="inputCity">Fecha de recepción</label>
            <input type="datetime-local" class="form-control" id="FechaRecepcion" name="FechaRecepcion" value="{{old('FechaRecepcion')}}">
            @error ('FechaRecepcion')
              <span class="error text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class="form-group col-md-6">
            <label for="">DUI</label>
            <input type="text" class="form-control" id="DUI" name="DUI" placeholder="xxxxxxxx-x" value="{{old('DUI')}}">
            @error ('DUI')
              <span class="error text-danger">{{$message}}</span>
            @enderror
          </div>
          </div>
           <!---Cuarta fila"--->
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
                <option>ACTIVO</option>
                <option>INACIVO</option>
                <option>APROBADO</option>
                <option>REPROBADO</option>
                <option>DESERTOR</option>

              </select>
              @error ('Estado')
                <span class="error text-danger">{{$message}}</span>
              @enderror
            </div>
          </div>

          <!---Quinta fila"--->
            <div class="form-row" style="margin-bottom:100px">
            <div class="form-group col-md-6">
              <label for="inputPassword4">Observaciones</label>
              <textarea class="form-control" id="Observacion" name="Observacion" rows="3"></textarea>
            </div>

          <div class="form-group col-md-6">
          <br>
          <input type="submit" class="btn btn-primary" value="Guardar" name="Guardar">
          <a class="btn btn-danger" href="{{route('pre.index')}}">Cancelar</a>
          </div>
        </div>
      </div>
      </div>

    </form>
  </div>
  </div>
  @endsection
