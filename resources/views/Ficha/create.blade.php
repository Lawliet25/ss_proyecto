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

                      <h3><strong>1.DATOS PERSONALES</strong></h3>
                    

                     <!---Primera fila"--->
                     <div class="form-row">
                     <div class="form-group col-md-6">
                       <label for="inputAddress">Sexo:</label>
                       <select id="Grado" name="Sexo" class="form-control">
                         <option></option>
                         <option>Masculino</option>
                         <option>Femenino</option>
                       </select>
                     </div>

                     <div class="form-group col-md-6">
                       <label for="inputAddress">Identidad de género:</label>
                       <select id="IdentidadGenero" name="IdentidadGenero" class="form-control">
                         <option></option>
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
                            <input type="datetime-local" class="form-control" id="FechaNacimiento" name="FechaNacimiento">
                         </div>
                     </div>
                     <!---Tercera fila"--->
                     <div class="form-row">
                          <div class="form-group col-md-6">
                             <label for="inputEmail4">Nacionalidad</label>
                             <select class="form-control" name="Nacionalidad">
                                 <option></option>
                                 <option>Salvadoreña</option>
                                 <option>Extranjera</option>
                             </select>
                         </div>

                         <div class="form-group col-md-6">
                           <label for="inputAddress">Estado familiar:</label>
                           <select id="EstadoFamiliar" name="EstadoFamiliar" class="form-control">
                             <option></option>
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
                                 <option></option>
                                 <option>Propio</option>
                                 <option>Público</option>
                                 <option>Familiar</option>
                                 <option>Peatonal</option>
                             </select>
                         </div>

                         <div class="form-group col-md-6">
                           <label for="inputAddress">Distancia entre la sede y la residencia:</label>
                           <input type="text" class="form-control" name="DistanciaSede" placeholder="Distancia a sede">
                          </div>
                     </div>
                      <!---Quinta fila"--->
                     <div class="form-row">
                         <div class="form-group col-md-6">
                           <label for="inputEmail4">Trabaja:</label>
                           <select class="form-control" name="Trabaja">
                               <option></option>
                               <option>Sí</option>
                               <option>No</option>
                           </select>
                         </div>

                         <div class="form-group col-md-6">
                            <label for="inputEmail4">Ocupación:</label>
                             <input type="text" class="form-control" id="Ocupacion" name="Ocupacion" placeholder="Ocupación">
                         </div>
                      </div>
                     <!---Sexta fila"--->
                     <div class="form-row">
                         <div class="form-group col-md-6">
                           <label for="inputEmail4">Tiene discapacidad:</label>
                           <select class="form-control" name="Discapacidad">
                               <option></option>
                               <option>Sí</option>
                               <option>No</option>
                           </select>
                         </div>

                         <div class="form-group col-md-6">
                            <label for="inputEmail4">Tipo de discapacidad:</label>
                             <input type="text" class="form-control" id="TipoDiscapacidad" name="TipoDiscapacidad" placeholder="Tipo de discapacidad">
                         </div>
                      </div>
                      <!---Séptima fila"--->
                     <div class="form-row">
                         <div class="form-group col-md-6">
                           <label for="inputEmail4">Retornado:</label>
                           <select class="form-control" name="Retornado">
                               <option></option>
                               <option>Sí</option>
                               <option>No</option>

                           </select>
                         </div>

                         <div class="form-group col-md-6">
                             <label for="inputEmail4">País:</label>
                             <input type="text" class="form-control" id="PaisRetornado" name="PaisRetornado" placeholder="Pais">
                         </div>
                      </div>

                      <!---Octava fila"--->
                     <div class="form-row">
                         <div class="form-group col-md-12">
                             <label for="inputEmail4">Enfermedades o alergias que padece:</label>
                             <textarea class="form-control" name="Enfermedades" rows="2"></textarea>
                         </div>
                      </div>

                      <!--- Novena fila"--->
                      <div class="form-row">
                         <div class="form-group col-md-12">
                             <label for="inputEmail4">Medicamentos prescrito de carácter permanente:</label>
                             <textarea class="form-control" rows="2" name="Medicamentos"></textarea>
                         </div>
                     </div>
                      <hr>

                       <!---PARTE DE DATOS FAMILIARES--->
                      <h4><strong>Datos familiares o responsable</strong></h4>
                      <!---Primera fila"--->
                     <div class="form-row">
                          <div class="form-group col-md-6">
                             <label for="inputEmail4">Nombres: </label>
                             <input type="text" class="form-control" id="NombresEncargado" name="NombresEncargado" placeholder="Nombres">
                         </div>

                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Apellidos:</label>
                             <input type="text" class="form-control" id="ApellidosEncargado" name="ApellidosEncargado" placeholder="Apellidos">
                          </div>
                     </div>

                     <!---Segunda fila"--->
                     <div class="form-row">
                          <div class="form-group col-md-6">
                             <label for="inputEmail4">Lugar de trabajo:</label>
                             <input type="text" class="form-control" id="LugarTrabajoEncargado" name="LugarTrabajoEncargado" placeholder="Lugar de trabajo">
                         </div>

                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Parentesco:</label>
                             <select class="form-control" name="ParentescoEncargado">
                                 <option></option>
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
                             <input type="text" class="form-control" id="DUIEncargado" name="DUIEncargado" placeholder="DUI">
                         </div>

                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Teléfono:</label>
                             <input type="text" class="form-control" id="TelefonoEncargado" name="TelefonoEncargado" placeholder="Teléfono">
                         </div>
                     </div>

                     <!---Cuarta fila"--->
                     <div class="form-row">
                          <div class="form-group col-md-6">
                             <label for="inputEmail4">Profesión u oficio:</label>
                             <input type="text" class="form-control" id="ProfesionEncargado" name="ProfesionEncargado" placeholder="Profesión u oficio">
                         </div>

                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Dirección:</label>
                             <input type="text" class="form-control" name="DireccionEncargado" id="nombres" placeholder="Dirección">
                         </div>
                     </div>
                    

                      <!---PARTE DE LOS DATOS DE RESIDENCIA--->
                      <h3><strong>2.DATOS DE RESIDENCIA</strong></h3>
                      <!---Primera fila"--->
                      <div class="form-row">
                      <div class="form-group col-md-6">
                         <label for="inputEmail4">Dirección:</label>
                           <input type="text" class="form-control" id="nombres" placeholder="Dirección" name="Direccion">
                      </div>

                      <div class="form-group col-md-6">
                         <label for="inputEmail4">Zona de residencia:</label>
                         <select class="form-control" name="Zona">
                             <option></option>
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
                               <option></option>
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
                             <label for="inputEmail4">Municipio</label>
                             <input type="text" class="form-control" name="Municipio" id="nombres" placeholder="Municipio">
                         </div>
                     </div>

                     <!---Tercera fila"--->
                     <div class="form-row">
                          <div class="form-group col-md-6">
                             <label for="inputEmail4">Tel.Residencia:</label>
                             <input type="text" class="form-control" name="TelefonoResidencia" id="TelefonoResidencia" placeholder="Telefono de residencia">
                         </div>

                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Tel.Celular:</label>
                             <input type="text" class="form-control" id="Celular" name="Celular" placeholder="Telefono celular">
                          </div>
                     </div>

                     <!---Cuarta fila"--->
                     <div class="form-row">
                          <div class="form-group col-md-6">
                             <label for="inputEmail4">Tel.Trabajo:</label>
                             <input type="text" class="form-control" id="TelefonoTrabajo" name="TelefonoTrabajo" placeholder="Telefono trabajo">
                         </div>

                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Correo electrónico:</label>
                             <input type="text" class="form-control" id="Email" name="Email" placeholder="Correo electrónico">
                          </div>
                     </div>
                     <hr>

                     <!---PARTE DE LOS DATOS SOBRE SITUACION FAMILIAR--->
                     <h3><strong>3.DATOS SOBRE SITUACION FAMILIAR</strong></h3>

                     <!---Primera fila"--->
                     <div class="form-row">
                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Convivencia:</label>
                             <select class="form-control" name="ConvivenciaFamiliar" id="ConvivenciaFamiliar">
                             <option></option>
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
                             <input type="text" class="form-control" name="EspecifiqueConv" id="EspecifiqueConv" placeholder="Especifique">
                         </div>
                     </div>

                     <!---Segunda fila"--->
                     <div class="form-row">
                         <div class="form-group col-md-5">
                             <label for="inputEmail4">De quién depende económicamente:</label>
                             <select class="form-control" name="DependenciaEconomica">
                                 <option></option>
                                 <option>Padre</option>
                                 <option>Madre</option>
                                 <option>Padre y madre</option>
                                 <option>Hermanos</option>
                                 <option>Otros</option>

                             </select>
                         </div>

                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Especifique:</label>
                             <input type="text" class="form-control"  name="EspecifiqueEcon"placeholder="Especifique">
                         </div>
                     </div>

                     <!---Tercera fila"--->
                     <div class="form-row">
                         <div class="form-group col-md-6">
                             <label for="inputEmail4">N° de miembros de la familia:</label>
                             <input type="number" class="form-control" name="NumFamiliares"  placeholder="Número de miembros">
                         </div>

                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Cantidad de hijos:</label>
                             <select class="form-control" name="CantidadHijos">
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
                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Hijo 1</label>
                             <input type="text" class="form-control" name="Edad1" placeholder="Edad">
                             <select class="form-control" name="Sexo1">
                                 <option></option>
                                 <option>Femenino</option>
                                 <option>Masculino</option>
                            </select>
                         </div>

                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Hijo 2</label>
                             <input type="text" class="form-control" name="Edad2" placeholder="Edad">
                             <select class="form-control" name="Sexo2">
                                 <option></option>
                                 <option>Femenino</option>
                                 <option>Masculino</option>
                            </select>
                         </div>
                      </div>

                      <!---Quinta fila CAMPOS HIJOS--->
                     <div class="form-row">
                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Hijo 3</label>
                             <input type="text" class="form-control" name="Edad3" placeholder="Edad">
                             <select class="form-control" name="Sexo3">
                                 <option></option>
                                 <option>Femenino</option>
                                 <option>Masculino</option>
                             </select>
                         </div>

                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Hijo 4</label>
                             <input type="text" class="form-control" name="Edad4"  placeholder="Edad">
                             <select class="form-control" name="Sexo4">
                                 <option></option>
                                 <option>Femenino</option>
                                 <option>Masculino</option>
                            </select>
                         </div>
                      </div>
                      <hr>

                      <!---PARTE DE ESTUDIOS REALIZADOS--->
                     <h3><strong>4.ESTUDIOS REALIZADOS</strong></h3>

                     <!---Primera fila--->
                     <div class="form-ow">
                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Último grado cursado:</label>
                             <select id="Grado" name="GradoCursado" class="form-control">
                               <option></option>
                               <option>6° grado</option>
                               <option>7° grado</option>
                               <option>8° grado</option>
                               <option>9° grado</option>
                               <option>1er año</option>
                             </select>
                         </div>

                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Año en que lo cursó:</label>
                             <input type="text" class="form-control" name="AñoCursado"  placeholder="Año en que lo cursó">
                         </div>
                      </div>

                      <!---Segunda fila--->
                      <div class="form-row">
                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Institución en que lo cursó:</label>
                             <select class="form-control" name="InstitucionAcademica">
                                 <option></option>
                                 <option>Modalidad flexible</option>
                                 <option>Regular</option>
                                 <option>Extranjero</option>
                            </select>

                         </div>

                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Nombre del Centro Educativo:</label>
                             <input type="text" class="form-control" name="CentroEducativo" placeholder="Centro educativo">
                         </div>
                      </div>
                      

                       <!---PARTE DE DATOS MATRICULA--->
                     <h3><strong>5.DATOS DE MATRICULA</strong></h3>

                     <!---Primera fila--->
                     <div class="form-row">
                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Turno:</label>
                             <select class="form-control" name="Turno">
                                 <option></option>
                                 <option>Mañana</option>
                                 <option>Tarde</option>
                                 <option>Mañana y tarde</option>
                                 <option>Nocturno</option>
                            </select>
                         </div>

                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Jornada:</label>
                             <select class="form-control" name="Jornada">
                                 <option></option>
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
                                 <option></option>
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
                                 <option></option>
                                 <option>Certificado Escolar</option>
                                 <option>Certificación de Notas</option>
                                 <option>Prueba de suficiencia</option>
                                 <option>Resolución por Equivalencia</option>
                             </select>
                         </div>
                      </div>
                      <hr>

                      <!---Tercera fila GRADO A MATRICULAR--->
                      <h4><strong>Grado a matricular</strong></h4>
                      
                      <div class="form-row" >
                          <div class="form-group col-md-6">
                             <label for="">Grados disponibles:</label>
                              <select class="form-control" name="GradoMatricular">
                                 <option></option>
                                 <option>7° Grado</option>
                                 <option>8° Grado</option>
                                 <option>9° Grado</option>
                                 <option>1er. Año</option>
                                 <option>2do Año</option>
                             </select>
                         </div>

                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Sección:</label>
                             <select class="form-control" name="Seccion">
                                 <option></option>
                                 <option>A</option>
                                 <option>B</option>
                                 <option>C</option>
                              </select>
                         </div>
                      </div>

                     <!---Cuarta fila--->
                      <div class="form-row">
                          <div class="form-group col-md-6">
                          <label for="inputEmail4">Fecha de registro de ficha:</label>
                          <input type="datetime-local" class="form-control" id="FechaFR" name="FechaFR">
                          </div>

                          <div class="form-group col-md-6">
                              <label for="inputEmail4">Persona que recibió la ficha:</label>
                              <input type="text" class="form-control" id="PersonaRegistro" name="PersonaRegistro" placeholder="">
                          </div>
                      </div>

                      <!---Quinta fila GRADO A MATRICULAR--->
                      <h4><strong>Datos adicionales:</strong></h4>
                      <div class="row">
                         <div class="form-group col-md-12">
                             <textarea name="DatosAdicionales" class="form-control"rows="3" cols="80"></textarea>
                         </div>
                     </div>

                     <div class="form-row">
                     <input type="submit" class="btn btn-primary" value="Matricular" name="Guardar">
                     </div>
                 </div>
             </div>
         </div>
         
     </form>

@endsection

