@extends('layout.template')

@section('title','Formulario de ficha de matrícula')

@section('content')


<div class="row">
      <div class="col-md-8 col-md-offset-2">

      <form style="" action="{{route('Ficha.store')}}" method="POST">
        @csrf

              <div class="panel panel-info">
                  <div class="panel-heading text-center"><strong>Registro de ficha</strong></div>
                  <div class="panel-body">

                  <div  class="form-inline">
                    <label for="inputAddress">ID de preregistro:</label>
                    <input style="margin-left:10px;" readonly type="text" name="id_preregistro" value="{{$preregistro->id}}" class="form-control"><br><br>
                    <label for="inputAddress">Nombre completo:</label>
                    <input style="margin-left:3px;" readonly type="text" name="" value="{{$preregistro->Nombres . ' ' .  $preregistro->Apellidos }}" class="form-control"><br><br>
                    <label for="inputAddress">NIE:</label>
                    <input style="margin-left:100px;" readonly type="text" name="" value="{{$preregistro->NIE}}" class="form-control">
                  </div>
                    <hr>
                      <!---SECCION DE SEDE--->
                      <?php
                      $usuario = 'root';
                      $password = '';
                      $db = new PDO('mysql:host=localhost;dbname=bvudb', $usuario, $password);
                      ?>
                      <h3><strong>1.DATOS DE SEDE</strong></h3>
                      <div class="form-row" style="margin-bottom:100px;">
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

                      <!---SECCION DE DATOS PERSONALES--->
                      <h3><strong>2.DATOS PERSONALES</strong></h3>


                     <!---Primera fila"--->
                     <div class="form-row" style="margin-bottom:100px;">
                     <div class="form-group col-md-6">
                       <label for="inputAddress">Sexo:</label>
                       <select id="Grado" name="Sexo" class="form-control">
                         <option>{{old('Sexo')}}</option>
                         <option>Masculino</option>
                         <option>Femenino</option>
                       </select>
                       @error ('Sexo')
                            <span class="error text-danger">{{$message}}</span>
                       @enderror
                     </div>

                     <div class="form-group col-md-6">
                       <label for="inputAddress">Identidad de género:</label>
                       <select id="IdentidadGenero" name="IdentidadGenero" class="form-control">
                         <option>{{old('IdentidadGenero')}}</option>
                         <option>Lesbianas</option>
                         <option>Gays</option>
                         <option>Bisexuales</option>
                         <option>Transexuales</option>
                         <option>Intersexuales</option>
                         <option>No Aplica</option>
                      </select>
                     </div>
                     </div>

                     <!---Segunda fila"--->
                     <div class="form-row" style="margin-bottom:190px;">
                         <div class="form-group col-md-12">
                            <label for="inputCity">Fecha de nacimiento</label>
                            <input type="datetime-local" class="form-control" id="FechaNacimiento" name="FechaNacimiento" value="{{old('FechaNacimiento')}}">
                            @error ('FechaNacimiento')
                                <span class="error text-danger">{{$message}}</span>
                            @enderror
                         </div>
                     </div>
                     <!---Tercera fila"--->
                     <div class="form-row" style="margin-bottom:190px;">
                          <div class="form-group col-md-6">
                             <label for="inputEmail4">Nacionalidad</label>
                             <select class="form-control" name="Nacionalidad">
                                
                                 <option>{{old('Nacionalidad')}}</option>
                                 <option>Salvadoreña</option>
                                 <option>Extranjera</option>
                             </select>
                             @error ('Nacionalidad')
                            <span class="error text-danger">{{$message}}</span>
                            @enderror
                         </div>

                         <div class="form-group col-md-6">
                           <label for="inputAddress">Estado familiar:</label>
                           <select id="EstadoFamiliar" name="EstadoFamiliar" class="form-control">
                            
                             <option>{{old('EstadoFamiliar')}}</option>
                             <option>Soltero(a)</option>
                             <option>Casado(a)</option>
                             <option>Acompañado(a)</option>
                           </select>
                           @error ('EstadoFamiliar')
                            <span class="error text-danger">{{$message}}</span>
                           @enderror
                          </div>
                     </div>
                      <!---Cuarta fila"--->
                     <div class="form-row" style="margin-bottom:190px;">
                          <div class="form-group col-md-6">
                             <label for="inputEmail4">Medio de transporte:</label>
                             <select class="form-control" name="MedioTransporte">
                                
                                 <option>{{old('MedioTransporte')}}</option>
                                 <option>Propio</option>
                                 <option>Público</option>
                                 <option>Familiar</option>
                                 <option>Peatonal</option>
                             </select>
                             @error ('MedioTransporte')
                                <span class="error text-danger">{{$message}}</span>
                             @enderror
                         </div>

                         <div class="form-group col-md-6">
                           <label for="inputAddress">Distancia entre la sede y la residencia:</label>
                           <input type="text" class="form-control" name="DistanciaSede" placeholder="Distancia a sede" value="{{old('DistanciaSede')}}">
                           @error ('DistanciaSede')
                                <span class="error text-danger">{{$message}}</span>
                             @enderror
                          </div>
                     </div>
                      <!---Quinta fila"--->
                     <div class="form-row" style="margin-bottom:190px;">
                         <div class="form-group col-md-6">
                           <label for="inputEmail4">Trabaja:</label>
                           <select class="form-control" name="Trabaja" id="selectTrabaja">
                            
                               <option>{{old('Trabaja')}}</option>
                               <option>Sí</option>
                               <option>No</option>
                           </select>
                           @error ('Trabaja')
                                <span class="error text-danger">{{$message}}</span>
                             @enderror
                         </div>

                         <div class="form-group col-md-6">
                            <label for="inputEmail4">Ocupación:</label>
                             <input type="text" class="form-control" id="Ocupacion" name="Ocupacion" placeholder="Ocupación" value="{{old('Ocupacion')}}" disabled>
                             @error ('Ocupacion')
                                <span class="error text-danger">{{$message}}</span>
                             @enderror
                         </div>
                         <script>
                            let selectTrabaja;
                            let inputocupacion;
                            selectTrabaja=document.getElementById("selectTrabaja");
                            inputocupacion=document.getElementById("Ocupacion");
                            
                            selectTrabaja.onclick=function(e){
                            if(selectTrabaja.value=="Sí"){
                                inputocupacion.disabled=false;
                                }
                            else{
                            inputocupacion.disabled=true;
                            }
                            }
                        </script>
                      </div>
                     <!---Sexta fila"--->
                     <div class="form-row" style="margin-bottom:190px;">
                         <div class="form-group col-md-6">
                           <label for="inputEmail4">Tiene discapacidad:</label>
                           <select class="form-control" name="Discapacidad" id="selectDisca">
                            
                               <option>{{old('Discapacidad')}}</option>
                               <option>Sí</option>
                               <option>No</option>
                           </select>
                           @error ('Discapacidad')
                                <span class="error text-danger">{{$message}}</span>
                             @enderror
                         </div>

                         <div class="form-group col-md-6">
                            <label for="inputEmail4">Tipo de discapacidad:</label>
                             <input type="text" class="form-control" id="TipoDiscapacidad" name="TipoDiscapacidad" placeholder="Tipo de discapacidad" value="{{old('TipoDiscapacidad')}}" disabled>
                         </div>
                         <script>
                            let selectDisca;
                            let inputdisca;
                            selectDisca=document.getElementById("selectDisca");
                            inputdisca=document.getElementById("TipoDiscapacidad");
                            
                            selectDisca.onclick=function(e){
                            if(selectDisca.value=="Sí"){
                                inputdisca.disabled=false;
                                }
                            else{
                            inputdisca.disabled=true;
                            }
                            }
                        </script>
                      </div>
                      <!---Séptima fila"--->
                     <div class="form-row" style="margin-bottom:190px;">
                         <div class="form-group col-md-6">
                           <label for="inputEmail4">Retornado:</label>
                           <select class="form-control" name="Retornado" id="selectRetor">
                            
                               <option>{{old('Retornado')}}</option>
                               <option>Sí</option>
                               <option>No</option>
                           </select>
                           @error ('Retornado')
                                <span class="error text-danger">{{$message}}</span>
                             @enderror
                         </div>

                         <div class="form-group col-md-6">
                             <label for="inputEmail4">País:</label>
                             <input type="text" class="form-control" id="PaisRetornado" name="PaisRetornado" placeholder="Pais" value="{{old('PaisRetornado')}}" disabled>
                         </div>
                         
                         <script>
                            let selectRetor;
                            let inputretor;
                            selectRetor=document.getElementById("selectRetor");
                            inputretor=document.getElementById("PaisRetornado");
                            
                            selectRetor.onclick=function(e){
                            if(selectRetor.value=="Sí"){
                                inputretor.disabled=false;
                                }
                            else{
                            inputretor.disabled=true;
                            }
                            }
                        </script>
                      </div>

                      <!---Octava fila"--->
                     <div class="form-row" style="margin-bottom:190px;">
                         <div class="form-group col-md-12">
                             <label for="inputEmail4">Enfermedades o alergias que padece:</label>
                             <textarea  style="display: block;
                              width: 100%;
                              resize: none;
                              padding: 20px;
                              border: 1.5px solid #b2b2b2;
                              border-radius: 5px;"
                              placeholder="Escriba aquí" name="Enfermedades" rows="3">{{old('Enfermedades')}}</textarea>
                              @error ('Enfermedades')
                                <span class="error text-danger">{{$message}}</span>
                             @enderror
                         </div>
                      </div>

                      <!--- Novena fila"--->
                      <div class="form-row" style="margin-bottom:190px;">
                         <div class="form-group col-md-12">
                             <label for="inputEmail4">Medicamentos prescrito de carácter permanente:</label>
                             <textarea style="display: block;
                              width: 100%;
                              resize: none;
                              padding: 20px;
                              color: #202020;
                              border: 1.5px solid #b2b2b2;
                              border-radius: 5px;"
                              placeholder="Escriba aquí" rows="3" name="Medicamentos">{{old('Medicamentos')}}</textarea>
                              @error ('Medicamentos')
                                <span class="error text-danger">{{$message}}</span>
                             @enderror
                         </div>
                     </div>
                      <hr>

                       <!---SECCION  DE DATOS FAMILIARES--->
                      <h3><strong>3.DATOS FAMILIARES O RESPONSABLE</strong></h3>
                      <!---Primera fila"--->
                     <div class="form-row" style="margin-bottom:100px;">
                          <div class="form-group col-md-6">
                             <label for="inputEmail4">Nombres: </label>
                             <input type="text" class="form-control" id="NombresEncargado" name="NombresEncargado" placeholder="Nombres" value="{{old('NombresEncargado')}}">
                             @error ('NombresEncargado')
                                <span class="error text-danger">{{$message}}</span>
                             @enderror
                         </div>

                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Apellidos:</label>
                             <input type="text" class="form-control" id="ApellidosEncargado" name="ApellidosEncargado" placeholder="Apellidos" value="{{old('ApellidosEncargado')}}">
                             @error ('ApellidosEncargado')
                                <span class="error text-danger">{{$message}}</span>
                             @enderror
                          </div>
                     </div>

                     <!---Segunda fila"--->
                     <div class="form-row" style="margin-bottom:190px;">
                          <div class="form-group col-md-6">
                             <label for="inputEmail4">Lugar de trabajo:</label>
                             <input type="text" class="form-control" id="LugarTrabajoEncargado" name="LugarTrabajoEncargado" placeholder="Lugar de trabajo">
                         </div>

                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Parentesco:</label>
                             <select class="form-control" name="ParentescoEncargado">
                                
                                 <option>{{old('ParentescoEncargado')}}</option>
                                 <option>Madre</option>
                                 <option>Padre</option>
                                 <option>Hermano/a</option>
                                 <option>Tía</option>
                                 <option>Tío</option>
                                 <option>Pareja</option>
                                 <option>Conocido</option>
                             </select>
                             @error ('ParentescoEncargado')
                                <span class="error text-danger">{{$message}}</span>
                             @enderror
                          </div>
                     </div>

                     <!---Tercera fila"--->
                     <div class="form-row" style="margin-bottom:190px;">
                          <div class="form-group col-md-6">
                             <label for="inputEmail4">Número de DUI:</label>
                             <input type="text" class="form-control" id="DUIEncargado" name="DUIEncargado" placeholder="DUI" value="{{old('DUIEncargado')}}">
                         </div>

                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Teléfono:</label>
                             <input type="text" class="form-control" id="TelefonoEncargado" name="TelefonoEncargado" placeholder="Teléfono" value="{{old('TelefonoEncargado')}}">
                         </div>
                     </div>

                     <!---Cuarta fila"--->
                     <div class="form-row" style="margin-bottom:190px;">
                          <div class="form-group col-md-6">
                             <label for="inputEmail4">Profesión u oficio:</label>
                             <input type="text" class="form-control" id="ProfesionEncargado" name="ProfesionEncargado" placeholder="Profesión u oficio" value="{{old('ProfesionEncargado')}}">
                         </div>

                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Dirección:</label>
                             <input type="text" class="form-control" name="DireccionEncargado" id="nombres" placeholder="Dirección" value="{{old('DireccionEncargado')}}">
                         </div>
                     </div>


                      <!---SECCION  DE LOS DATOS DE RESIDENCIA--->
                      <h3><strong>4.DATOS DE RESIDENCIA</strong></h3>
                      <!---Primera fila"--->
                      <div class="form-row" style="margin-bottom:100px;">
                      <div class="form-group col-md-6">
                         <label for="inputEmail4">Dirección:</label>
                           <input type="text" class="form-control" id="nombres" placeholder="Dirección" name="Direccion" value="{{old('Direccion')}}">
                           @error ('Direccion')
                                <span class="error text-danger">{{$message}}</span>
                             @enderror
                      </div>

                      <div class="form-group col-md-6">
                         <label for="inputEmail4">Zona de residencia:</label>
                         <select class="form-control" name="Zona">
                            
                             <option>{{old('Zona')}}</option>
                             <option>Rural</option>
                             <option>Urbana</option>
                         </select>
                         @error ('Zona')
                                <span class="error text-danger">{{$message}}</span>
                             @enderror
                     </div>
                     </div>

                     <!---Segunda fila"--->
                     <?php
                     $usuario = 'root';
                     $password = '';
                     $db = new PDO('mysql:host=localhost;dbname=bvudb', $usuario, $password);
                     ?>
                     <div class="form-row" style="margin-bottom:190px;">
                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Departamento</label>
                             <select class="form-control" name="Departamento">
                                
                               <option>{{old('Departamento')}}</option>
                               <?php
                                $query = $db->prepare("SELECT * FROM departamento");
                                $query->execute();
                                $data = $query->fetchAll();

                                foreach ($data as $valores):
                                echo '<option value="'.$valores["id"].'">'.$valores["Departamento"].'</option>';
                                endforeach;
                                ?>
                             </select>
                             @error ('Departamento')
                                <span class="error text-danger">{{$message}}</span>
                             @enderror

                         </div>

                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Municipio</label>
                             <input type="text" class="form-control" name="Municipio" id="nombres" placeholder="Municipio" value="{{old('Municipio')}}">
                             @error ('Municipio')
                                <span class="error text-danger">{{$message}}</span>
                             @enderror
                         </div>
                     </div>

                     <!---Tercera fila"--->
                     <div class="form-row" style="margin-bottom:190px;">
                          <div class="form-group col-md-6">
                             <label for="inputEmail4">Tel.Residencia:</label>
                             <input type="text" class="form-control" name="TelefonoResidencia" id="TelefonoResidencia" placeholder="Telefono de residencia" value="{{old('TelefonoResidencia')}}">
                         </div>

                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Tel.Celular:</label>
                             <input type="text" class="form-control" id="Celular" name="Celular" placeholder="Telefono celular" value="{{old('Celular')}}">
                          </div>
                     </div>

                     <!---Cuarta fila"--->
                     <div class="form-row" style="margin-bottom:190px;">
                          <div class="form-group col-md-6">
                             <label for="inputEmail4">Tel.Trabajo:</label>
                             <input type="text" class="form-control" id="TelefonoTrabajo" name="TelefonoTrabajo" placeholder="Telefono trabajo" value="{{old('TelefonoTrabajo')}}">
                         </div>

                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Correo electrónico:</label>
                             <input type="text" class="form-control" id="Email" name="Email" placeholder="Correo electrónico" value="{{old('Email')}}">
                          </div>
                     </div>
                     <hr>

                     <!---SECCION  DE LOS DATOS SOBRE SITUACION FAMILIAR--->
                     <h3><strong>5.DATOS SOBRE SITUACION FAMILIAR</strong></h3>

                     <!---Primera fila"--->
                     <div class="form-row" style="margin-bottom:190px;">
                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Convivencia:</label>
                             <select class="form-control" name="ConvivenciaFamiliar" id="ConvivenciaFamiliar">
                                
                             <option>{{old('ConvivenciaFamiliar')}}</option>
                             <option>Con madre</option>
                             <option>Con padre</option>
                             <option>Padre y madre</option>
                             <option>Con familiar</option>
                             <option>No vive con familiares</option>
                             <option>Otros</option>
                            </select>
                            @error ('ConvivenciaFamiliar')
                                <span class="error text-danger">{{$message}}</span>
                             @enderror
                         </div>

                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Especifique:</label>
                             <input type="text" class="form-control" name="EspecifiqueConv" id="EspecifiqueConv" placeholder="Especifique" value="{{old('EspecifiqueConv')}}" disabled>
                         </div>
                         <script>
                            let otros;
                            let input;
                            otros=document.getElementById("ConvivenciaFamiliar");
                            input=document.getElementById("EspecifiqueConv");
                            
                            otros.onclick=function(e){
                            if(otros.value=="Otros"){
                                input.disabled=false;
                                }
                            else{
                            input.disabled=true;
                            }
                            }
                        </script>
                     </div>

                     <!---Segunda fila"--->
                     <div class="form-row" style="margin-bottom:285px;">
                         <div class="form-group col-md-6">
                             <label for="inputEmail4">De quién depende económicamente:</label>
                             <select class="form-control" name="DependenciaEconomica" id="DependenciaEconomica">
                                
                                 <option>{{old('DependenciaEconomica')}}</option>
                                 <option>Padre</option>
                                 <option>Madre</option>
                                 <option>Padre y madre</option>
                                 <option>Hermanos</option>
                                 <option>Otros</option>
                             </select>
                             @error ('DependenciaEconomica')
                                <span class="error text-danger">{{$message}}</span>
                             @enderror
                         </div>

                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Especifique:</label>
                             <input type="text" class="form-control"  name="EspecifiqueEcon" id="EspecifiqueEcon" placeholder="Especifique" value="{{old('EspecifiqueEcon')}}" disabled>
                         </div>
                         
                         <script>
                            let otrosE;
                            let input2;
                            otrosE=document.getElementById("DependenciaEconomica");
                            input2=document.getElementById("EspecifiqueEcon");
                            
                            otrosE.onclick=function(e){
                            if(otrosE.value=="Otros"){
                                input2.disabled=false;
                                }
                            else{
                            input2.disabled=true;
                            }
                            }
                        </script>
                     </div>

                     <!---Tercera fila"--->
                     <div class="form-row" style="margin-bottom:285px;">
                         <div class="form-group col-md-6">
                             <label for="inputEmail4">N° de miembros de la familia:</label>
                             <input type="number" class="form-control" name="NumFamiliares"  placeholder="Número de miembros" value="{{old('NumFamiliares')}}">
                             @error ('NumFamiliares')
                                <span class="error text-danger">{{$message}}</span>
                             @enderror
                         </div>

                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Cantidad de hijos:</label>
                             <select class="form-control" name="CantidadHijos" id="selectHijos">
                                 <option>{{old('CantidadHijos')}}</option>
                                 <option>0</option>
                                 <option>1</option>
                                 <option>2</option>
                                 <option>3</option>
                                 <option>4</option>
                             </select>
                             @error ('CantidadHijos')
                                <span class="error text-danger">{{$message}}</span>
                             @enderror
                         </div>
                     </div>


                      <!---Cuarta fila CAMPOS HIJOS--->
                     <div class="form-row" style="margin-bottom:190px;">
                        <div class="col-md-12">
                         <div class="form-group col-md-6" id="Hijo1">
                             <label for="inputEmail4">Hijo 1</label>
                             <input type="text" class="form-control" name="Edad1" placeholder="Edad" value="{{old('Edad1')}}">
                             <label for="inputEmail4">Sexo</label>
                             <select class="form-control" name="Sexo1">
                                
                                 <option>{{old('Sexo1')}}</option>
                                 <option>Femenino</option>
                                 <option>Masculino</option>
                            </select>
                         </div>

                         <div class="form-group col-md-6" id="Hijo2">
                             <label for="inputEmail4">Hijo 2</label>
                             <input type="text" class="form-control" name="Edad2" placeholder="Edad" value="{{old('Edad2')}}">
                             <label for="inputEmail4">Sexo</label>
                             <select class="form-control" name="Sexo2">
                                
                                 <option>{{old('Sexo2')}}</option>
                                 <option>Femenino</option>
                                 <option>Masculino</option>
                            </select>
                         </div>
                        </div>
                      </div>

                      <!---Quinta fila CAMPOS HIJOS--->
                     <div class="form-row" style="margin-bottom:190px;">
                        <div class="col-md-12">
                         <div class="form-group col-md-6" id="Hijo3">
                             <label for="inputEmail4">Hijo 3</label>
                             <input type="text" class="form-control" name="Edad3" placeholder="Edad" value="{{old('Edad3')}}">
                             <label for="inputEmail4">Sexo</label>
                             <select class="form-control" name="Sexo3">
                                
                                 <option>{{old('Sexo3')}}</option>
                                 <option>Femenino</option>
                                 <option>Masculino</option>
                             </select>
                         </div>

                         <div class="form-group col-md-6" id="Hijo4">
                             <label for="inputEmail4">Hijo 4</label>
                             <input type="text" class="form-control" name="Edad4"  placeholder="Edad" value="{{old('Edad4')}}">
                             <label for="inputEmail4">Sexo</label>
                             <select class="form-control" name="Sexo4">
                                
                                 <option>{{old('Sexo4')}}</option>
                                 <option>Femenino</option>
                                 <option>Masculino</option>
                            </select>
                         </div>
                        </div>
                      </div>
                      <script>
                        let Hijo1;
                        let Hijo2;
                        let Hijo3;
                        let Hijo4;
                        let select;
                        Hijo1 = document.getElementById("Hijo1");
                        Hijo2 = document.getElementById("Hijo2");
                        Hijo3 = document.getElementById("Hijo3");
                        Hijo4 = document.getElementById("Hijo4");
                        select = document.getElementById("selectHijos");
                        
                        Hijo1.style.display="none";
                                Hijo2.style.display="none";
                                Hijo3.style.display="none";
                                Hijo4.style.display="none";
                        window.onload=function(){
                            datos();
                        }
                        select.onclick=function(e){
                            datos();
                            
                        }
                    function datos(){
                        if(select.value==""){
                                Hijo1.style.display="none";
                                Hijo2.style.display="none";
                                Hijo3.style.display="none";
                                Hijo4.style.display="none";
                            }
                            if(select.value=="0"){
                                Hijo1.style.display="none";
                                Hijo2.style.display="none";
                                Hijo3.style.display="none";
                                Hijo4.style.display="none";
                            }
                            if(select.value=="1"){
                                Hijo1.style.display="block";
                                Hijo2.style.display="none";
                                Hijo3.style.display="none";
                                Hijo4.style.display="none";
                            }
                            if(select.value=="2"){
                                Hijo1.style.display="block";
                                Hijo2.style.display="block";
                                Hijo3.style.display="none";
                                Hijo4.style.display="none";
                            }
                            if(select.value=="3"){
                                Hijo1.style.display="block";
                                Hijo2.style.display="block";
                                Hijo3.style.display="block";
                                Hijo4.style.display="none";
                            }
                            if(select.value=="4"){
                                Hijo1.style.display="block";
                                Hijo2.style.display="block";
                                Hijo3.style.display="block";
                                Hijo4.style.display="block";
                            }
                    }
                      </script>
                      <hr>

                      <!---SECCION  DE ESTUDIOS REALIZADOS--->
                     <h3><strong>6.ESTUDIOS REALIZADOS</strong></h3>

                     <!---Primera fila--->
                     <div class="form-row" style="margin-bottom:100px">
                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Último grado cursado:</label>
                             <select id="Grado" name="GradoCursado" class="form-control">
                                
                               <option>{{old('GradoCursado')}}</option>
                               <option>6° grado</option>
                               <option>7° grado</option>
                               <option>8° grado</option>
                               <option>9° grado</option>
                               <option>1er año</option>
                             </select>
                             @error ('GradoCursado')
                                <span class="error text-danger">{{$message}}</span>
                             @enderror
                         </div>

                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Año en que lo cursó:</label>
                             <input type="text" class="form-control" name="AñoCursado"  placeholder="Año en que lo cursó" value="{{old('AñoCursado')}}">
                             @error ('AñoCursado')
                                <span class="error text-danger">{{$message}}</span>
                             @enderror
                         </div>
                      </div>

                      <!---Segunda fila--->
                      <div class="form-row" style="margin-bottom:190px">
                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Institución en que lo cursó:</label>
                             <select class="form-control" name="InstitucionAcademica">
                                
                                 <option>{{old('InstitucionAcademica')}}</option>
                                 <option>Modalidad flexible</option>
                                 <option>Regular</option>
                                 <option>Extranjero</option>
                            </select>
                            @error ('InstitucionAcademica')
                                <span class="error text-danger">{{$message}}</span>
                             @enderror
                         </div>

                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Nombre del Centro Educativo:</label>
                             <input type="text" class="form-control" name="CentroEducativo" placeholder="Centro educativo" value="{{old('CentroEducativo')}}">
                             @error ('CentroEducativo')
                                <span class="error text-danger">{{$message}}</span>
                             @enderror
                         </div>
                      </div>


                       <!---SECCION  DE DATOS MATRICULA--->
                     <h3><strong>7.DATOS DE MATRICULA</strong></h3>

                     <!---Primera fila--->
                     <div class="form-row" style="margin-bottom:100px">
                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Turno:</label>
                             <select class="form-control" name="Turno">
                                
                                 <option>{{old('Turno')}}</option>
                                 <option>Mañana</option>
                                 <option>Tarde</option>
                                 <option>Mañana y tarde</option>
                                 <option>Nocturno</option>
                            </select>
                            @error ('Turno')
                                <span class="error text-danger">{{$message}}</span>
                             @enderror
                         </div>

                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Jornada:</label>
                             <select class="form-control" name="Jornada">
                                <option disabled selected hidden>Seleccionar</option>
                                 <option>{{old('Jornada')}}</option>
                                 <option>Lunes a viernes</option>
                                 <option>Sábado</option>
                                 <option>Domingo</option>
                             </select>
                             @error ('Jornada')
                                <span class="error text-danger">{{$message}}</span>
                             @enderror
                         </div>
                      </div>

                      <!---Segunda fila--->
                      <div class="form-row" style="margin-bottom:190px">
                      <div class="form-group col-md-6">
                             <label for="inputEmail4">Modalidad de atención:</label>
                             <select class="form-control" name="Modalidad">
                                
                                 <option>{{old('Modalidad')}}</option>
                                 <option>Nocturno</option>
                                 <option>Distancia</option>
                                 <option>Acelerada</option>
                                 <option>Semipresencial</option>
                                 <option>Virtual</option>
                                 <option>Prueba de suficiencia</option>
                                 <option>Nivelación académica</option>
                                 <option>Modalidad flexible integrada</option>
                             </select>
                             @error ('Modalidad')
                                <span class="error text-danger">{{$message}}</span>
                             @enderror
                         </div>

                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Tipo de ingreso:</label>
                             <select class="form-control" name="TipoIngreso">
                                
                                 <option>{{old('TipoIngreso')}}</option>
                                 <option>Certificado Escolar</option>
                                 <option>Certificación de Notas</option>
                                 <option>Prueba de suficiencia</option>
                                 <option>Resolución por Equivalencia</option>
                             </select>
                             @error ('TipoIngreso')
                                <span class="error text-danger">{{$message}}</span>
                             @enderror
                         </div>
                      </div>
                      <hr>

                      <!---Tercera fila GRADO A MATRICULAR--->
                      <h4><strong>Grado a matricular</strong></h4>

                      <div class="form-row" style="margin-bottom:100px">
                          <div class="form-group col-md-6">
                             <label for="">Grados disponibles:</label>
                              <select class="form-control" name="GradoMatricular">
                                
                                 <option>{{old('GradoMatricular')}}</option>
                                 <option>7° grado</option>
                                 <option>8° grado</option>
                                 <option>9° grado</option>
                                 <option>1er año</option>
                                 <option>2do año</option>
                             </select>
                             @error ('GradoMatricular')
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
                              </select>
                              @error ('Seccion')
                                <span class="error text-danger">{{$message}}</span>
                             @enderror
                         </div>
                      </div>

                     <!---Cuarta fila--->
                      <div class="form-row" style="margin-bottom:190px">
                          <div class="form-group col-md-6">
                          <label for="inputEmail4">Fecha de registro de ficha:</label>
                          <input type="datetime-local" class="form-control" id="FechaFR" name="FechaFR" value="{{old('FechaFR')}}">
                          @error ('FechaFR')
                                <span class="error text-danger">{{$message}}</span>
                             @enderror
                          </div>

                          <div class="form-group col-md-6">
                              <label for="inputEmail4">Persona que recibió la ficha:</label>
                              <input type="text" class="form-control" id="PersonaRegistro" name="PersonaRegistro" placeholder="" value="{{old('PersonaRegistro')}}">
                              @error ('PersonaRegistro')
                                <span class="error text-danger">{{$message}}</span>
                             @enderror
                          </div>
                      </div>

                      <!---Quinta fila GRADO A MATRICULAR--->
                      <h4><strong>Datos adicionales:</strong></h4>
                      <div class="row">
                         <div class="form-group col-md-12">
                             <textarea name="DatosAdicionales"
                             style="display: block;
                              width: 100%;
                              resize: none;
                              padding: 20px;
                              color: #202020;
                              border: 1.5px solid #b2b2b2;
                              border-radius: 5px;"
                              placeholder="Escriba aquí" rows="3">{{old('DatosAdicionales')}}</textarea>
                              @error ('DatosAdicionales')
                                <span class="error text-danger">{{$message}}</span>
                             @enderror
                         </div>
                     </div>

                     <div class="form-row">
                     <input type="submit" class="btn btn-primary" value="Matricular" name="Guardar">
                     <a class="btn btn-danger" href="{{route('pre.index')}}">Cancelar</a>
                     </div>
                 </div>
             </div>
         </div>

     </form>


@endsection
