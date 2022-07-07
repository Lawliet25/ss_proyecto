@extends('layout.template')

@section('title','Formulario de actualización de datos')

@section('content')

<div class="row">
      <div class="col-md-8 col-md-offset-2">

      <form style="" action="{{route('Ficha.update',$alumno->id)}}" method="POST">
        @csrf

              <div class="panel panel-info">
                  <div class="panel-heading text-center"><strong>Editando Registro de ficha</strong></div>
                  <div class="panel-body">

                  <div  class="form-inline">
                     <label for="inputAddress">ID de preregistro:</label>
                     <input style="margin-left:10px;" readonly type="text" name="id_preregistro" value="{{$alumno->id_preregistro}}" class="form-control"><br>
                   </div>
                    <hr>
                    <!---SECCION DE SEDE--->
                    <?php
                    $usuario = 'root';
                    $password = '';
                    $db = new PDO('mysql:host=localhost;dbname=bvudb', $usuario, $password);
                    ?>
                    <h3><strong>1.DATOS DE SEDE</strong></h3>
                    <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputAddress">Código de sede:</label>
                      <select id="Sede" name="CodigoSede" class="form-control">
                        <option>{{$alumno->CodigoSede}}</option>
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
                        <option>{{$alumno->Sede}}</option>
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
                     <div class="form-row">
                         <div class="form-group col-md-6">
                             <label for="inputAddress">Sexo:</label>
                             <select id="Sexo" name="Sexo" class="form-control">
                                 <option>{{$alumno->Sexo}}</option>
                                 <option>Masculino</option>
                                 <option>Femenino</option>
                             </select>
                         </div>

                         <div class="form-group col-md-6">
                              <label for="inputAddress">Identidad de género:</label>
                              <select id="IdentidadGenero" name="IdentidadGenero" class="form-control">
                             <option>{{$alumno->IdentidadGenero}}</option>
                             <option>Lesbianas</option>
                              <option>Gays</option>
                             <option>Bisexuales</option>
                             <option>Transexuales</option>
                              <option>Intersexuales</option>
                             </select>
                         </div>
                     </div>

                    <!---Segunda fila"--->
                     <div class="form-row" >
                         <div class="form-group col-md-12">
                         <label for="inputCity">Fecha de nacimiento</label>
                         <input type="text" class="form-control" id="FechaNacimiento" name="FechaNacimiento" value="{{$alumno->FechaNacimiento}}">
                         </div>
                     </div>

                     <!---Tercera fila"--->
                     <div class="form-row">
                          <div class="form-group col-md-6">
                             <label for="inputEmail4">Nacionalidad</label>
                             <select class="form-control" name="Nacionalidad">
                                 <option>{{$alumno->Nacionalidad}}</option>
                                 <option>Salvadoreña</option>
                                 <option>Extranjera</option>
                             </select>
                         </div>

                         <div class="form-group col-md-6">
                           <label for="inputAddress">Estado familiar:</label>
                           <select id="EstadoFamiliar" name="EstadoFamiliar" class="form-control">
                             <option>{{$alumno->EstadoFamiliar}}</option>
                             <option>Soltero(a)</option>
                             <option>Casado(a)</option>
                             <option>Acompañado(a)</option>
                           </select>
                          </div>
                     </div>

                     <!---Cuarta fila"--->
                     <div class="form-row">
                          <div class="form-group col-md-6">
                             <label for="inputEmail4">Medio de transporte:</label>
                             <select class="form-control" name="MedioTransporte">
                                 <option>{{$alumno->MedioTransporte}}</option>
                                 <option>Propio</option>
                                 <option>Público</option>
                                 <option>Familiar</option>
                                 <option>Peatonal</option>
                             </select>
                         </div>

                         <div class="form-group col-md-6">
                           <label for="inputAddress">Distancia entre la sede y la residencia:</label>
                           <input type="text" value="{{$alumno->DistanciaSede}}" class="form-control" name="DistanciaSede" placeholder="Distancia a sede">
                          </div>
                     </div>

                      <!---Quinta fila"--->
                     <div class="form-row">
                         <div class="form-group col-md-6">
                           <label for="inputEmail4">Trabaja:</label>
                           <select class="form-control" name="Trabaja" id="selectTrabaja">
                               <option>{{$alumno->Trabaja}}</option>
                               <option>Sí</option>
                               <option>No</option>
                           </select>
                         </div>

                         <div class="form-group col-md-6">
                            <label for="inputEmail4">Ocupación:</label>
                             <input value="{{$alumno->Ocupacion}}" type="text" class="form-control" id="Ocupacion" name="Ocupacion" placeholder="Ocupación">
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
                     <div class="form-row">
                         <div class="form-group col-md-6">
                           <label for="inputEmail4">Tiene discapacidad:</label>
                           <select class="form-control" name="Discapacidad" id="selectDisca">
                               <option>{{$alumno->Discapacidad}}</option>
                               <option>Sí</option>
                               <option>No</option>
                           </select>
                         </div>

                         <div class="form-group col-md-6">
                            <label for="inputEmail4">Tipo de discapacidad:</label>
                             <input value="{{$alumno->TipoDiscapacidad}}" type="text" class="form-control" id="TipoDiscapacidad" name="TipoDiscapacidad" placeholder="Tipo de discapacidad" disabled>
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
                     <div class="form-row">
                         <div class="form-group col-md-6">
                           <label for="inputEmail4">Retornado:</label>
                           <select class="form-control" name="Retornado" id="selectRetor">
                               <option>{{$alumno->Retornado}}</option>
                               <option>Sí</option>
                               <option>No</option>
                           </select>
                         </div>
                         <div class="form-group col-md-6">
                             <label for="inputEmail4">País:</label>
                             <input value="{{$alumno->PaisRetornado}}" type="text" class="form-control" id="PaisRetornado" name="PaisRetornado" placeholder="Pais" disabled>
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
                     <div class="form-row">
                         <div class="form-group col-md-12">
                             <label for="inputEmail4">Enfermedades o alergias que padece:</label>
                             <textarea style="display: block;
                              width: 100%;
                              resize: none;
                              padding: 20px;
                              border: 1.5px solid #b2b2b2;
                              border-radius: 5px;"
                              placeholder="Escriba aquí" name="Enfermedades" rows="3">{{$alumno->Enfermedades}}</textarea>
                         </div>
                      </div>

                     <!--- Novena fila"--->
                      <div class="form-row">

                         <div class="form-group col-md-12">
                             <label for="inputEmail4">Medicamentos prescrito de carácter permanente:</label>
                             <textarea style="display: block;
                              width: 100%;
                              resize: none;
                              padding: 20px;
                              border: 1.5px solid #b2b2b2;
                              border-radius: 5px;"
                              placeholder="Escriba aquí" rows="3" name="Medicamentos">{{$alumno->Medicamentos}}</textarea>
                         </div>
                     </div>


                       <!---SECCION DE DATOS FAMILIARES--->
                      <h3><strong>3.DATOS FAMILIARES O RESPONSABLE</strong></h3>
                      <!---Primera fila"--->
                     <div class="form-row">
                          <div class="form-group col-md-6">
                             <label for="inputEmail4">Nombres: </label>
                             <input value="{{$alumno->NombresEncargado}}" type="text" class="form-control" id="NombresEncargado" name="NombresEncargado" placeholder="Nombres">
                         </div>

                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Apellidos:</label>
                             <input value="{{$alumno->ApellidosEncargado}}" type="text" class="form-control" id="ApellidosEncargado" name="ApellidosEncargado" placeholder="Apellidos">
                          </div>
                     </div>

                      <!---Segunda fila"--->
                     <div class="form-row">
                          <div class="form-group col-md-6">
                             <label for="inputEmail4">Lugar de trabajo:</label>
                             <input value="{{$alumno->LugarTrabajoEncargado}}" type="text" class="form-control" id="LugarTrabajoEncargado" name="LugarTrabajoEncargado" placeholder="Lugar de trabajo">
                         </div>

                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Parentesco:</label>
                             <select class="form-control" name="ParentescoEncargado">
                                 <option>{{$alumno->ParentescoEncargado}}</option>
                                 <option>Madre</option>
                                 <option>Padre</option>
                                 <option>Hermano/a</option>
                                 <option>Tía</option>
                                 <option>Tío</option>
                                 <option>Pareja</option>
                                 <option>Conocido</option>
                             </select>
                          </div>
                     </div>

                     <!---Tercera fila"--->
                     <div class="form-row">
                          <div class="form-group col-md-6">
                             <label for="inputEmail4">Número de DUI:</label>
                             <input value="{{$alumno->DUIEncargado}}" type="text" class="form-control" id="DUIEncargado" name="DUIEncargado" placeholder="DUI">
                         </div>

                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Teléfono:</label>
                             <input value="{{$alumno->TelefonoEncargado}}" type="text" class="form-control" id="TelefonoEncargado" name="TelefonoEncargado" placeholder="Teléfono">
                         </div>
                     </div>

                     <!---Cuarta fila"--->
                     <div class="form-row">
                          <div class="form-group col-md-6">
                             <label for="inputEmail4">Profesión u oficio:</label>
                             <input value="{{$alumno->ProfesionEncargado}}" type="text" class="form-control" id="ProfesionEncargado" name="ProfesionEncargado" placeholder="Profesión u oficio">
                         </div>

                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Dirección:</label>
                             <input value="{{$alumno->DireccionEncargado}}" type="text" class="form-control" name="DireccionEncargado" id="nombres" placeholder="Dirección">
                         </div>
                     </div>


                      <!---SECCION DE LOS DATOS DE RESIDENCIA--->
                      <h3><strong>4.DATOS DE RESIDENCIA</strong></h3>

                      <!---Primera fila"--->
                      <div class="form-row">
                          <div class="form-group col-md-6">
                             <label for="inputEmail4">Dirección:</label>
                             <input value="{{$alumno->Direccion}}" type="text" class="form-control" id="nombres" placeholder="Dirección" name="Direccion">
                          </div>

                          <div class="form-group col-md-6">
                             <label for="inputEmail4">Zona de residencia:</label>
                               <select class="form-control" name="Zona">
                                  <option>{{$alumno->Zona}}</option>
                                  <option>Rural</option>
                                  <option>Urbana</option>
                              </select>
                          </div>
                     </div>

                     <!---Segunda fila"--->
                     <?php
                     $usuario = 'root';
                     $password = '';
                     $db = new PDO('mysql:host=localhost;dbname=bvudb', $usuario, $password);
                     ?>
                     <div class="form-row">
                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Departamento</label>
                             <select class="form-control" name="Departamento">
                               <option>{{$alumno->Departamento}}</option>
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
                             <label for="inputEmail4">Municipio</label>
                             <input type="text" class="form-control" name="Municipio" id="nombres" placeholder="Municipio" value="{{$alumno->Municipio}}">
                         </div>
                     </div>

                     <!---Tercera fila"--->
                     <div class="form-row">
                          <div class="form-group col-md-6">
                             <label for="inputEmail4">Tel.Residencia:</label>
                             <input value="{{$alumno->TelefonoResidencia}}" type="text" class="form-control" name="TelefonoResidencia" id="TelefonoResidencia" placeholder="Telefono de residencia">
                         </div>

                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Tel.Celular:</label>
                             <input value="{{$alumno->Celular}}" type="text" class="form-control" id="Celular" name="Celular" placeholder="Telefono celular">
                          </div>
                     </div>

                    <!---Cuarta fila"--->
                     <div class="form-row">
                          <div class="form-group col-md-6">
                             <label for="inputEmail4">Tel.Trabajo:</label>
                             <input value="{{$alumno->TelefonoTrabajo}}" type="text" class="form-control" id="TelefonoTrabajo" name="TelefonoTrabajo" placeholder="Telefono trabajo">
                         </div>

                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Correo electrónico:</label>
                             <input value="{{$alumno->Email}}" type="text" class="form-control" id="Email" name="Email" placeholder="Correo electrónico">
                          </div>
                     </div>
                     <hr>

                     <!---SECCION DE LOS DATOS SOBRE SITUACION FAMILIAR--->
                     <h3><strong>5.DATOS SOBRE SITUACION FAMILIAR</strong></h3>

                     <!---Primera fila"--->
                     <div class="form-row">
                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Convivencia:</label>
                             <select class="form-control" name="ConvivenciaFamiliar" id="ConvivenciaFamiliar">
                             <option>{{$alumno->ConvivenciaFamiliar}}</option>
                             <option>Con madre</option>
                             <option>Con padre</option>
                             <option>Padre y madre</option>
                             <option>Con familiar</option>
                             <option>No vive con familiares</option>
                             <option>Otros</option>
                            </select>
                         </div>

                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Especifique:</label>
                             <input value="{{$alumno->EspecifiqueConv}}" type="text" class="form-control" name="EspecifiqueConv" id="EspecifiqueConv" placeholder="Especifique" disabled>
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
                     <div class="form-row">
                         <div class="form-group col-md-6">
                             <label for="inputEmail4">De quién depende económicamente:</label>
                             <select class="form-control" name="DependenciaEconomica" id="DependenciaEconomica">
                                 <option>{{$alumno->DependenciaEconomica}}</option>
                                 <option>Padre</option>
                                 <option>Madre</option>
                                 <option>Padre y madre</option>
                                 <option>Hermanos</option>
                                 <option>Otros</option>

                             </select>
                         </div>

                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Especifique:</label>
                             <input value="{{$alumno->EspecifiqueEcon}}" type="text" class="form-control" id="EspecifiqueEcon" name="EspecifiqueEcon"placeholder="Especifique" disabled>
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
                     <div class="form-row">
                         <div class="form-group col-md-6">
                             <label for="inputEmail4">N° de miembros de la familia:</label>
                             <input value="{{$alumno->NumFamiliares}}" type="number" class="form-control" name="NumFamiliares"  placeholder="Número de miembros">
                         </div>


                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Cantidad de hijos:</label>
                             <select class="form-control" name="CantidadHijos" id="selectHijos">
                                 <option>{{$alumno->CantidadHijos}}</option>
                                 <option>0</option>
                                 <option>1</option>
                                 <option>2</option>
                                 <option>3</option>
                                 <option>4</option>
                             </select>
                         </div>
                     </div>

                      <!---Cuarta fila CAMPOS HIJOS--->
                    <div class="form-row">
                        <div class="col-md-12">
                         <div class="form-group col-md-6" id="Hijo1">
                             <label for="inputEmail4">Hijo 1</label>
                             <input value="{{$alumno->Edad1}}" type="text" class="form-control" name="Edad1" placeholder="Edad">
                             <select class="form-control" name="Sexo1">
                                 <option>{{$alumno->Sexo1}}</option>
                                 <option>Femenino</option>
                                 <option>Masculino</option>
                            </select>
                         </div>

                         <div class="form-group col-md-6" id="Hijo2">
                             <label for="inputEmail4">Hijo 2</label>
                             <input value="{{$alumno->Edad2}}" type="text" class="form-control" name="Edad2" placeholder="Edad">
                             <select class="form-control" name="Sexo2">
                                 <option>{{$alumno->Sexo2}}</option>
                                 <option>Femenino</option>
                                 <option>Masculino</option>
                            </select>
                         </div>
                        </div>
                      </div>

                      <!---Quinta fila CAMPOS HIJOS--->
                    <div class="form-row">
                        <div class="col-md-12">
                         <div class="form-group col-md-6" id="Hijo3">
                             <label for="inputEmail4">Hijo 3</label>
                             <input value="{{$alumno->Edad3}}" type="text" class="form-control" name="Edad3" placeholder="Edad">
                             <select class="form-control" name="Sexo3">
                                 <option>{{$alumno->Sexo3}}</option>
                                 <option>Femenino</option>
                                 <option>Masculino</option>
                             </select>
                         </div>

                         <div class="form-group col-md-6" id="Hijo4">
                             <label for="inputEmail4">Hijo 4</label>
                             <input value="{{$alumno->Edad4}}" type="text" class="form-control" name="Edad4"  placeholder="Edad4">
                             <select class="form-control" name="Sexo4">
                                 <option>{{$alumno->Sexo4}}</option>
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
                      <!---SECCION DE ESTUDIOS REALIZADOS--->
                     <h3><strong>6.ESTUDIOS REALIZADOS</strong></h3>

                     <!---Primera fila--->
                     <div class="form-row">
                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Último grado cursado:</label>
                             <select id="Grado" name="GradoCursado" class="form-control">
                               <option>{{$alumno->GradoCursado}}</option>
                               <option>6° grado</option>
                               <option>7° grado</option>
                               <option>8° grado</option>
                               <option>9° grado</option>
                               <option>1er año</option>
                             </select>
                         </div>

                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Año en que lo cursó:</label>
                             <input value="{{$alumno->AñoCursado}}" type="text" class="form-control" name="AñoCursado"  placeholder="Año en que lo cursó">
                         </div>
                      </div>

                      <!---Segunda fila--->
                      <div class="form-row">
                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Institución en que lo cursó:</label>
                             <select class="form-control" name="InstitucionAcademica">
                                 <option>{{$alumno->InstitucionAcademica}}</option>
                                 <option>Modalidad flexible</option>
                                 <option>Regular</option>
                                 <option>Extranjero</option>
                            </select>

                         </div>

                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Nombre del Centro Educativo:</label>
                             <input value="{{$alumno->CentroEducativo}}" type="text" class="form-control" name="CentroEducativo" placeholder="Centro educativo">
                         </div>
                      </div>


                       <!---SECCION DE DATOS MATRICULA--->
                     <h3><strong>7.DATOS DE MATRICULA</strong></h3>

                     <!---Primera fila--->
                    <div class="form-row">
                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Turno:</label>
                             <select class="form-control" name="Turno">
                                 <option>{{$alumno->Turno}}</option>
                                 <option>Mañana</option>
                                 <option>Tarde</option>
                                 <option>Mañana y tarde</option>
                                 <option>Nocturno</option>
                            </select>
                         </div>

                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Jornada:</label>
                             <select class="form-control" name="Jornada">
                                 <option>{{$alumno->Jornada}}</option>
                                 <option>Lunes a viernes</option>
                                 <option>Sábado</option>
                                 <option>Domingo</option>
                             </select>
                         </div>
                      </div>

                      <!---Segunda fila--->
                      <div class="form-row">
                      <div class="form-group col-md-6">
                             <label for="inputEmail4">Modalidad de atención:</label>
                             <select class="form-control" name="Modalidad">
                                 <option>{{$alumno->Modalidad}}</option>
                                 <option>Nocturno</option>
                                 <option>Distancia</option>
                                 <option>Acelerada</option>
                                 <option>Semipresencial</option>
                                 <option>Virtual</option>
                                 <option>Prueba de suficiencia</option>
                                 <option>Nivelación académica</option>
                                 <option>Modalidad flexible integrada</option>
                             </select>
                         </div>

                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Tipo de ingreso:</label>
                             <select class="form-control" name="TipoIngreso">
                                 <option>{{$alumno->TipoIngreso}}</option>
                                 <option>Certificado Escolar</option>
                                 <option>Certificación de Notas</option>
                                 <option>Prueba de suficiencia</option>
                                 <option>Resolución por Equivalencia</option>
                             </select>
                         </div>
                      </div>


                      <!---Tercera fila GRADO A MATRICULAR--->
                      <h4><strong>Grado a matricular</strong></h4>

                     <div class="form-row">
                        <div class="form-group col-md-6">
                         <label for="">Grados disponibles:</label>
                             <select class="form-control" name="GradoMatricular">
                                 <option>{{$alumno->GradoMatricular}}</option>
                                 <option>7° grado</option>
                                 <option>8° grado</option>
                                 <option>9° grado</option>
                                 <option>Primer año</option>
                                 <option>Segundo año</option>
                             </select>
                             </div>

                             <div class="form-group col-md-6">
                             <label for="inputEmail4">Sección:</label>
                             <select class="form-control" name="Seccion">
                                 <option>{{$alumno->Seccion}}</option>
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
                         </div>
                      </div>


                      <!---Cuarta fila--->
                      <div class="form-row">
                          <div class="form-group col-md-6">
                          <label for="inputEmail4">Fecha de registro de ficha:</label>
                          <input value="{{$alumno->FechaFR}}" type="text" class="form-control" id="FechaFR" name="FechaFR">
                          </div>

                          <div class="form-group col-md-6">
                              <label for="inputEmail4">Persona que recibió la ficha:</label>
                              <input value="{{$alumno->PersonaRegistro}}" type="text" class="form-control" name="PersonaRegistro" placeholder="">
                          </div>
                      </div>

                      <!---Quinta fila--->
                      <h4><strong>Datos adicionales:</strong></h4>
                      <div class="row">
                         <div class="form-group col-md-12">
                             <textarea name="DatosAdicionales" class="form-control"rows="3" cols="80">{{$alumno->DatosAdicionales}}</textarea>
                         </div>
                     </div>

                     <div class="form-row">
                     <input type="submit" class="btn btn-primary" value="Actualizar datos" name="Guardar">
                     <a class="btn btn-danger" href="{{route('Ficha.index')}}">Cancelar</a>
                     </div>
                 </div>
             </div>
         </div>
     </form>




@endsection
