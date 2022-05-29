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
                             <input type="text" class="form-control" id="nombres" placeholder="Nombres">
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
                                 <option>Salvadoreña</option>
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

                     <!---PARTE DE LOS DATOS DE FAMILIA--->
                     <h3><strong>3.DATOS SOBRE SITUACION FAMILIAR</strong></h3>
                     <!---Primera fila"--->
                     <div class="row">
                         <div class="form-group col-md-4">
                             <label for="inputEmail4">Convivencia</label>
                             <select class="form-control"><option>Seleccionar</option></select>
                         </div>

                         <div class="form-group col-md-6">
                             <label for="inputEmail4">Especifique</label>
                             <input type="text" class="form-control"  placeholder="Especifique">
                         </div>
                     </div>
                     
                     <!---Segunda fila"--->
                     <div class="row">
                         <div class="form-group col-md-4">
                             <label for="inputEmail4">De quién depende económicamente</label>
                             <select class="form-control"><option>Seleccionar</option></select>
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
                 </div>
             </div>
         </div>
     </form>
  </div>
</div>
