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

            <!---SECCION DE SEDE--->
            <?php
            $usuario = 'root';
            $password = '';
            $db = new PDO('mysql:host=localhost;dbname=bvudb', $usuario, $password);
            ?>
            <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputAddress">Código de sede:</label>
              <select id="Sede" name="CodigoSede" class="form-control">
                <option>{{old('CodigoSede')}}</option>
                <?php
                 $query = $db->prepare("SELECT * FROM sedes");
                 $query->execute();
                 $data = $query->fetchAll();

                 foreach ($data as $valores):
                 echo '<option value="'.$valores["CodigoSede"].'">'.$valores["CodigoSede"].'</option>';
                 endforeach;
                 ?>
             </select>
            </div>

            <div class="form-group col-md-6">
              <label for="inputAddress">Nombre de sede:</label>
              <select id="Sede" name="Sede" class="form-control">
                <option>{{old('Sede')}}</option>
                <?php
                 $query = $db->prepare("SELECT * FROM sedes");
                 $query->execute();
                 $data = $query->fetchAll();

                 foreach ($data as $valores):
                 echo '<option value="'.$valores["Sede"].'">'.$valores["Sede"].'</option>';
                 endforeach;
                 ?>
             </select>
            </div>
            </div>

           <!---Primera fila"--->
        <div class="form-group" style="margin-bottom:168px;">
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
        <div class="form-row" style="margin-bottom:268px">
        <div class="form-group col-md-6">
          <label for="inputAddress">Año de inscripción</label>
          <select id="Año" name="Año" class="form-control">
            <option>{{old('Año')}}</option>
            <option>2018</option>
            <option>2019</option>
            <option>2020</option>
            <option>2021</option>
            <option>2022</option>
            <option>2023</option>
            <option>2024</option>
            <option>2025</option>
            <option>2026</option>
            <option>2027</option>
            <option>2028</option>
            <option>2029</option>
            <option>2030</option>
            <option>2031</option>
            <option>2032</option>
            <option>2033</option>
            <option>2034</option>
            <option>2035</option>
          </select>
          @error ('Año')
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
        <div class="form-row" style="margin-bottom:368px">
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
          <div class="form-row" style="margin-bottom:468px">
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
          <hr>

          <!---SECCION  DE DATOS MATRICULA--->
        <h5><i><strong>DATOS DE MATRICULA</strong></i></h5>

        <!---Primera fila--->
        <div class="form-row" style="margin-bottom:50px">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Turno:</label>
                <select class="form-control" name="Turno">

                    <option>{{old('Turno')}}</option>
                    <option>MAÑANA</option>
                    <option>TARDE</option>
                    <option>MAÑANA Y TARDE</option>
                    <option>NOCTURNO</option>
               </select>
               @error ('Turno')
                   <span class="error text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group col-md-6">
                <label for="inputEmail4">Jornada:</label>
                <select class="form-control" name="Jornada">
                    <option>{{old('Jornada')}}</option>
                    <option>LUNES A VIERNES</option>
                    <option>SÁBADO</option>
                    <option>DOMINGO</option>
                </select>
                @error ('Jornada')
                   <span class="error text-danger">{{$message}}</span>
                @enderror
            </div>
         </div>

         <!---Segunda fila--->
         <div class="form-row" style="margin-bottom:100px">
         <div class="form-group col-md-6">
                <label for="inputEmail4">Modalidad de atención:</label>
                <select class="form-control" name="Modalidad">

                    <option>{{old('Modalidad')}}</option>
                    <option>NOCTURNO</option>
                    <option>DISTANCIA</option>
                    <option>ACELERADA</option>
                    <option>SEMIPRESENCIAL</option>
                    <option>VIRTUAL</option>
                    <option>PRUEBA DE SUFICIENCIA</option>
                    <option>NIVELACIÓN ACADÉMICA</option>
                    <option>MODALIDAD FLEXIBLE INTEGRADA</option>
                </select>
                @error ('Modalidad')
                   <span class="error text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group col-md-6">
                <label for="inputEmail4">Tipo de ingreso:</label>
                <select class="form-control" name="TipoIngreso">

                    <option>{{old('TipoIngreso')}}</option>
                    <option>CERTIFICADO ESCOLAR</option>
                    <option>CERTIFICACIÓN DE NOTAS</option>
                    <option>PRUEBA DE SUFUCIENCIAS</option>
                    <option>RESOLUCIÓN POR EQUIVALENCIA</option>
                </select>
                @error ('TipoIngreso')
                   <span class="error text-danger">{{$message}}</span>
                @enderror
            </div>
         </div>


         <!---Tercera fila GRADO A MATRICULAR--->

         <div class="form-row" style="margin-bottom:252px">
             <div class="form-group col-md-6">
                <label for="">Grados disponibles:</label>
                 <select class="form-control" name="Grado">

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
                <label for="inputEmail4">Sección:</label>
                <select class="form-control" name="Seccion">

                    <option>{{old('Seccion')}}</option>
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                    <option>D</option>
                    <option>E</option>
                    <option>F</option>
                    <option>G</option>
                    <option>H</option>
                    <option>I</option>
                    <option>J</option>
                    <option>K</option>
                    <option>L</option>
                    <option>M</option>
                    <option>N</option>
                    <option>O</option>
                    <option>P</option>
                    <option>Q</option>
                    <option>R</option>
                    <option>S</option>
                    <option>T</option>
                    <option>U</option>
                    <option>V</option>
                    <option>W</option>
                    <option>X</option>
                    <option>Y</option>
                    <option>Z</option>
                 </select>
                 @error ('Seccion')
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
