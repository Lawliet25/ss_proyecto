@extends('layout.template')

@section('title','Formulario de Ficha grande')

@section('content')

<div class="row">
      <div class="col-lg-8 col-lg-offset-2">

      <form style="">
          <div class="form-inline">
              <div class="panel panel-info">
                  <div class="panel-heading text-center"><strong>Registro Ficha</strong></div>
                  <div class="panel-body">
                      <h3><strong>1.DATOS PERSONALES</strong></h3>
                     <!---Primera fila"--->
                      <div class="row">
                          <div class="form-group col-md-4">
                             <label for="inputEmail4">Nombres</label>
                             <input type="text" class="form-control" id="nombres" placeholder="Nombres" value="">
                         </div>

                         <div class="form-group col-md-4">
                             <label for="inputEmail4">Apellidos</label>
                             <input type="text" class="form-control" id="apellidos" placeholder="Apellidos">
                          </div>

                          <div class="form-group col-md-4">
                             <label for="inputEmail4">Edad:</label>
                             <input type="text" class="form-control" id="Edades" placeholder="Edad">
                          </div>
                     </div>
                     <!---Segunda fila"--->
                     <div class="row">
                     <div class="form-group col-md-3">
                          <label>Sexo:</label>
                          <label class="radio-inline">
                              <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Masculino
                         </label>

                         <label class="radio-inline">
                             <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Femenino
                         </label>
                     </div>

                     <div class="form-group col-md-8">
                          <label>Identidad de Género</label>
                          <label class="radio-inline">
                              <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> Gays
                         </label>

                         <label class="radio-inline">
                             <input type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4"> Lesbianas
                         </label>

                         <label class="radio-inline">
                             <input type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option5"> Bisexuales
                         </label>

                         <label class="radio-inline">
                             <input type="radio" name="inlineRadioOptions" id="inlineRadio6" value="option6"> Transexuales
                         </label>

                         <label class="radio-inline">
                             <input type="radio" name="inlineRadioOptions" id="inlineRadio7" value="option7"> Intersexuales
                         </label>
                     </div>
                     </div>
                     <!---Tercera fila"--->
                     <div class="row">
                         <div class="form-group col-md-5">
                         <label for="inputCity">Fecha de nacimiento</label>
                         <input type="datetime-local" class="form-control" id="fecha_nacimiento">
                         </div>

                         <div class="form-group col-md-3">
                          <label for="inputEmail4">DUI</label>
                          <input type="text" class="form-control" id="Edades" placeholder="DUI">
                         </div>

                         <div class="form-group col-md-3">
                         <label for="inputEmail4">NIE</label>
                         <input type="text" class="form-control" id="Edades" placeholder="NIE">
                         </div>
                     </div>
                     <!---Cuarta fila"--->
                     <div class="row">
                          <div class="form-group col-md-3">
                             <label for="inputEmail4">Nacionalidad</label>
                             <select class="form-control">
                                 <option>Saleccionar</option>
                                 <option>Salvadoreña</option>
                                 <option>Extranjera</option>
                             </select>
                         </div>

                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Estado familiar:</label>
                             <label class="radio-inline">
                             <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Soltero(a)
                             </label>

                             <label class="radio-inline">
                             <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Casado(a)
                             </label>

                             <label class="radio-inline">
                             <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> Acompañado(a)
                             </label>
                          </div>
                     </div>
                     <!---Quinta fila"--->
                     <div class="row">
                         <div class="form-group col-md-3">
                             <label for="inputEmail4">Tiene Discapacidad:</label>
                             <label class="radio-inline">
                                 <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Si
                             </label>

                             <label class="radio-inline">
                                 <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> No
                             </label>
                         </div>

                         <div class="form-group col-md-6">
                            <label for="inputEmail4">Tipo de Discapacidad:</label>
                             <input type="text" class="form-control" id="nombres" placeholder="Tipo de Discapacidad">
                         </div>
                      </div>
                     <!---Sexta fila"--->
                     <div class="row">
                         <div class="form-group col-md-3">
                             <label for="inputEmail4">Retornado</label>
                             <label class="radio-inline">
                                 <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Si
                             </label>

                             <label class="radio-inline">
                                 <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> No
                             </label>
                         </div>

                         <div class="form-group col-md-4">
                             <label for="inputEmail4">País:</label>
                             <input type="text" class="form-control" id="nombres" placeholder="Pais">
                         </div>
                      </div>

                      <!---Séptima fila"--->
                     <div class="row">
                         <div class="form-group col-md-8">
                             <label for="inputEmail4">Enfermedades o alergias que padece</label>
                             <textarea class="form-control" rows="2"></textarea>
                         </div>
                      </div>

                      <!---Octava fila"--->
                      <div class="row">
                         <div class="form-group col-md-8">
                             <label for="inputEmail4">Medicamentos prescrito de carácter permanente</label>
                             <textarea class="form-control" rows="2"></textarea>
                         </div>
                     </div>
                      <hr>

                       <!---PARTE DE DATOS FAMILIARES--->
                      <h4><strong>Datos familiares o responsable</strong></h4>
                      <!---Primera fila"--->
                     <div class="row">
                          <div class="form-group col-md-4">
                             <label for="inputEmail4">Nombres</label>
                             <input type="text" class="form-control" id="nombres" placeholder="Nombres">
                         </div>

                         <div class="form-group col-md-4">
                             <label for="inputEmail4">Apellidos</label>
                             <input type="text" class="form-control" id="apellidos" placeholder="Apellidos">
                          </div>

                          <div class="form-group col-md-4">
                             <label for="inputEmail4">Parentesco</label>
                             <select class="form-control">
                                 <option>Seleccionar</option>
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

                     <!---Segunda fila"--->
                     <div class="row">
                          <div class="form-group col-md-10">
                             <label for="inputEmail4">Lugar de Trabajo:</label>
                             <input type="text" class="form-control" id="nombres" placeholder="">
                         </div>
                     </div>

                     <!---Tercera fila"--->
                     <div class="row">
                          <div class="form-group col-md-4">
                             <label for="inputEmail4">Número de DUI:</label>
                             <input type="text" class="form-control" id="nombres" placeholder="">
                         </div>

                         <div class="form-group col-md-4">
                             <label for="inputEmail4">Télefono:</label>
                             <input type="text" class="form-control" id="nombres" placeholder="">
                         </div>
                     </div>

                     <!---Cuarta fila"--->
                     <div class="row">
                          <div class="form-group col-md-4">
                             <label for="inputEmail4">Profesión u oficio:</label>
                             <input type="text" class="form-control" id="nombres" placeholder="">
                         </div>

                         <div class="form-group col-md-4">
                             <label for="inputEmail4">Dirección:</label>
                             <input type="text" class="form-control" id="nombres" placeholder="">
                         </div>
                     </div>
                     <hr>

                      <!---PARTE DE LOS DATOS DE RESIDENCIA--->
                      <h3><strong>2.DATOS DE RESIDENCIA</strong></h3>
                      <!---Primera fila"--->
                      <div class="group">
                         <label for="inputEmail4">Dirección:</label>
                           <input type="text" class="form-control" id="nombres" placeholder="Dirección">
                      </div>

                     <!---Segunda fila"--->
                     <div class="row">
                         <div class="form-group col-md-4">
                             <label for="inputEmail4">Departamento</label>
                             <select class="form-control"><option>Seleccionar</option></select>
                         </div>

                         <div class="form-group col-md-4">
                             <label for="inputEmail4">Municipio</label>
                             <select class="form-control"><option>Seleccionar</option></select>
                         </div>
                     </div>

                     <!---Tercera fila"--->
                     <div class="row">
                     <div class="form-group col-md-5">
                         <label for="inputEmail4">Zona de Residencia</label>
                         <label class="radio-inline">
                             <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Rural
                         </label>

                         <label class="radio-inline">
                             <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Urbano
                         </label>
                     </div>
                     </div>

                     <!---Cuarta fila"--->
                     <div class="row">
                          <div class="form-group col-md-5">
                             <label for="inputEmail4">Tel.Residencia</label>
                             <input type="text" class="form-control" id="nombres" placeholder="Telefono Residencia">
                         </div>

                         <div class="form-group col-md-5">
                             <label for="inputEmail4">Tel.Celular</label>
                             <input type="text" class="form-control" id="apellidos" placeholder="Telefono Celular">
                          </div>
                     </div>

                     <!---Quinta fila"--->
                     <div class="row">
                          <div class="form-group col-md-5">
                             <label for="inputEmail4">Tel.Trabajo</label>
                             <input type="text" class="form-control" id="nombres" placeholder="Telefono Trabajo">
                         </div>

                         <div class="form-group col-md-5">
                             <label for="inputEmail4">Correo electrónico</label>
                             <input type="text" class="form-control" id="apellidos" placeholder="Correo electronico">
                          </div>
                     </div>
                     <hr>

                     <!---PARTE DE LOS DATOS SOBRE SITUACION FAMILIAR--->
                     <h3><strong>3.DATOS SOBRE SITUACION FAMILIAR</strong></h3>

                     <!---Primera fila"--->
                     <div class="row">
                         <div class="form-group col-md-5">
                             <label for="inputEmail4">Convivencia</label>
                             <select class="form-control">
                             <option>Seleccionar</option>
                             <option>Con Madre</option>
                             <option>Con Padre</option>
                             <option>Padre y Madre</option>
                             <option>Con familiar</option>
                             <option>No vive con familiares</option>
                             <option>Otros</option>
                            </select>
                         </div>

                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Especifique</label>
                             <input type="text" class="form-control"  placeholder="Especifique">
                         </div>
                     </div>

                     <!---Segunda fila"--->
                     <div class="row">
                         <div class="form-group col-md-5">
                             <label for="inputEmail4">De quién depende económicamente</label>
                             <select class="form-control">
                                 <option>Seleccionar</option>
                                 <option>Padre</option>
                                 <option>Madre</option>
                                 <option>Padre y Madre</option>
                                 <option>Hermanos</option>
                                 <option>Otros</option>

                             </select>
                         </div>

                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Especifique</label>
                             <input type="text" class="form-control"  placeholder="Especifique">
                         </div>
                     </div>

                     <!---Tercera fila"--->
                     <div class="row">
                         <div class="form-group col-md-6">
                             <label for="inputEmail4">N° de miembros de la familia</label>
                             <input type="text" class="form-control"  placeholder="">
                         </div>
                     </div>

                     <!---Cuarta fila"--->
                     <div class="row">
                         <div class="form-group col-md-3">
                             <label for="inputEmail4">Tiene hijos</label>
                             <label class="radio-inline">
                                 <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Si
                             </label>

                             <label class="radio-inline">
                                 <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> No
                             </label>
                         </div>

                         <div class="form-group col-md-3">
                             <label for="inputEmail4">Cantidad de hijos:</label>
                             <select class="form-control">
                                 <option>Seleccionar</option>
                                 <option>1</option>
                                 <option>2</option>
                                 <option>3</option>
                                 <option>4</option>
                             </select>
                         </div>
                      </div>

                      <!---Quinta fila CAMPOS HIJOS--->
                     <div class="row">
                         <div class="form-group col-md-5">
                             <label for="inputEmail4">Hijo 1</label>
                             <input type="text" class="form-control"  placeholder="Edad">
                             <select class="form-control">
                                 <option>Sexo</option>
                                 <option>Femenino</option>
                                 <option>Masculino</option>
                            </select>
                         </div>

                         <div class="form-group col-md-5">
                             <label for="inputEmail4">Hijo 2</label>
                             <input type="text" class="form-control"  placeholder="Edad">
                             <select class="form-control">
                                 <option>Sexo</option>
                                 <option>Femenino</option>
                                 <option>Masculino</option>
                            </select>
                         </div>
                      </div>

                      <!---Sexta fila CAMPOS HIJOS--->
                     <div class="row">
                         <div class="form-group col-md-5">
                             <label for="inputEmail4">Hijo 3</label>
                             <input type="text" class="form-control"  placeholder="Edad">
                             <select class="form-control">
                                 <option>Sexo</option>
                                 <option>Femenino</option>
                                 <option>Masculino</option>
                             </select>
                         </div>

                         <div class="form-group col-md-5">
                             <label for="inputEmail4">Hijo 4</label>
                             <input type="text" class="form-control"  placeholder="Edad">
                             <select class="form-control">
                                 <option>Sexo</option>
                                 <option>Femenino</option>
                                 <option>Masculino</option>
                            </select>
                         </div>
                      </div>

                      <div class="row">
                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Hijos menores a un año</label>
                             <input type="text" class="form-control"  placeholder="Meses">
                             <select class="form-control">
                                 <option>Sexo</option>
                                 <option>Femenino</option>
                                 <option>Masculino</option>
                             </select>
                         </div>
                     </div>
                      <hr>

                      <!---PARTE DE ESTUDIOS REALIZADOS--->
                     <h3><strong>4.ESTUDIOS REALIZADOS</strong></h3>

                     <!---Primera fila--->
                     <div class="row">
                         <div class="form-group col-md-5">
                             <label for="inputEmail4">Ultimo grado cursado</label>
                             <input type="text" class="form-control"  placeholder="">
                         </div>

                         <div class="form-group col-md-5">
                             <label for="inputEmail4">Año en que lo curso</label>
                             <input type="text" class="form-control"  placeholder="">
                         </div>
                      </div>

                      <!---Segunda fila--->
                      <div class="row">
                         <div class="form-group col-md-5">
                             <label for="inputEmail4">Institución en que lo curso</label>
                             <input type="text" class="form-control"  placeholder="">
                         </div>

                         <div class="form-group col-md-5">
                             <label for="inputEmail4">Nombre del Centro Educativo</label>
                             <input type="text" class="form-control"  placeholder="">
                         </div>
                      </div>
                      <hr>

                       <!---PARTE DE DATOS MATRICULA--->
                     <h3><strong>4.DATOS DE MATRICULA</strong></h3>

                     <!---Primera fila--->
                     <div class="row">
                         <div class="form-group col-md-3">
                             <label for="inputEmail4">Turno</label>
                             <select class="form-control">
                                 <option>Seleccionar</option>
                                 <option>Mañana</option>
                                 <option>Tarde</option>
                                 <option>Mañana y tarde</option>
                                 <option>Nocturno</option>
                            </select>
                         </div>

                         <div class="form-group col-md-3">
                             <label for="inputEmail4">Jornada</label>
                             <select class="form-control">
                                 <option>Seleccionar</option>
                                 <option>Lunes a Viernes</option>
                                 <option>Sábado</option>
                                 <option>Domingo</option>
                             </select>
                         </div>

                         <div class="form-group col-md-5">
                             <label for="inputEmail4">Modalidad de atención</label>
                             <select class="form-control">
                                 <option>Seleccionar</option>
                                 <option>Nocturno</option>
                                 <option>Distancia</option>
                                 <option>Acelerada</option>
                                 <option>Semipresencial</option>
                                 <option>Virtual</option>
                                 <option>Prueba de suficiencia</option>
                                 <option>Nivelación Académica</option>
                                 <option>Modalidad Flexible integrada</option>
                             </select>
                         </div>
                      </div>

                      <!---Segunda fila--->
                      <div class="row">
                         <div class="form-group col-md-5">
                             <label for="inputEmail4">Tipo de ingreso</label>
                             <select class="form-control">
                                 <option>Seleccionar</option>
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
                      <div class="row">
                         <div class="form-group col-md-4">
                             <label class="radio-inline">
                                 <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Primer ciclo
                             </label>
                             <select class="form-control">
                                 <option>Seleccionar grado</option>
                                 <option>1° Grado</option>
                                 <option>2° Grado</option>
                                 <option>3° Grado</option>
                             </select>
                         </div>

                         <div class="form-group col-md-4">
                             <label class="radio-inline">
                                 <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Segundo ciclo
                             </label>
                             <select class="form-control">
                                 <option>Seleccionar grado</option>
                                 <option>4° Grado</option>
                                 <option>5° Grado</option>
                                 <option>6° Grado</option>
                             </select>
                         </div>
                      </div>

                      <!---Cuarta fila GRADOS A MATRICULAR--->
                      <div class="row">
                         <div class="form-group col-md-4">
                             <label class="radio-inline">
                                 <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Tercer ciclo
                             </label>
                             <select class="form-control">
                                 <option>Seleccionar grado</option>
                                 <option>7° Grado</option>
                                 <option>8° Grado</option>
                                 <option>9° Grado</option>
                             </select>
                         </div>

                         <div class="form-group col-md-4">
                             <label class="radio-inline">
                                 <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Bachillerato General
                             </label>
                             <select class="form-control">
                                 <option>Seleccionar grado</option>
                                 <option>1er. Año</option>
                                 <option>2° Año</option>
                             </select>
                         </div>
                     </div>
                     <hr>

                     <!---Quinta fila--->
                     <div class="row">
                         <div class="form-group col-md-5">
                             <label for="inputEmail4">Sección</label>
                             <input type="text" class="form-control"  placeholder="Sección">
                         </div>
                      </div>
                      <hr>

                      <!---Sexta fila GRADO A MATRICULAR--->
                      <h4><strong>Datos Adicionales</strong></h4>
                      <div class="row">
                         <div class="form-group col-md-12">
                             <label class="radio-inline">
                                 <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Partida de nacimiento
                             </label>

                             <label class="radio-inline">
                                 <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Certificado
                             </label>

                             <label class="radio-inline">
                                 <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> DUI
                             </label>

                             <label class="radio-inline">
                                 <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Carnet de residente
                             </label>

                             <label class="radio-inline">
                                 <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Pasaporte
                             </label>

                             <label class="radio-inline">
                                 <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Certificación de notas
                             </label>

                             <label class="radio-inline">
                                 <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Resolución por equivalencia
                             </label>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </form>

@endsection
