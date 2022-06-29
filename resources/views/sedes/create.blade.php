@extends('layout.template')

@section('title','Formulario de sedes')

@section('content')

    <div class="row">
    <div class="col-md-8 col-md-offset-1">

        <h3>Formulario de sedes</h3>
      <form style="" action="{{route('sedes.store')}}" method="POST">
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
        <?php
        $usuario = 'root';
        $password = '';
        $db = new PDO('mysql:host=localhost;dbname=bvudb', $usuario, $password);
        ?>
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
             echo '<option value="'.$valores["Departamento"].'">'.$valores["Departamento"].'</option>';
             endforeach;
             ?>
          </select>

        </div>
        <div class="form-group col-md-6">
          <label for="inputAddress2">Municipio</label>
          <input type="text" class="form-control" id="Municipio" name="Municipio" placeholder="Digite el municipio">

        </div>
        </div>

          <div class="form-group col-md-6">
          <br>
          <input type="submit" class="btn btn-primary" value="Guardar" name="Guardar">
          <a class="btn btn-danger" href="{{route('sedes.index')}}">Cancelar</a>
          </div>
        </div>
      </div>
      </div>

    </form>
  </div>
  </div>
  @endsection
