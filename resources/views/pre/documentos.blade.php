@extends('layout.template')

@section('title','Formulario de documentos')

@section('content')
<div class="container">

            <div class="row">
                <div class="col-md-10">
                  <h3>Agregar documentos a alumno</h3>
                    <a type="button" class="btn btn-danger btn-md" href="{{route('pre.index')}}">Regresar</a>
                <br>
                @if (session('status'))
                  <div class="alert alert-success">
                    {{session('status')}}
                  </div>
                @endif

                <br>
                <form style="" action="{{route('pre.update',$preregistro->id)}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="panel panel-info">
                    <div class="panel-heading">Información y documentación general del alumno</div>
                    <div class="panel-body">
                      <div class="form-group col-md-4">
                        <label for="" class="form-label">Ficha de registro</label>
                        <select id="FichaRegistro" name="FichaRegistro" class="form-control">
                          <option>{{$preregistro->FichaRegistro}}</option>
                          <option>SÍ</option>
                          <option>NO</option>

                        </select>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="" class="form-label">Foto de certificado</label>
                        <select id="FotoCertificado" name="FotoCertificado" class="form-control">
                          <option>{{$preregistro->FotoCertificado}}</option>
                          <option>SÍ</option>
                          <option>NO</option>
                        </select>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="formFile" class="form-label">Foto de título</label>
                        <select id="FotoTitulo" name="FotoTitulo" class="form-control">
                          <option>{{$preregistro->FotoTitulo}}</option>
                          <option>SÍ</option>
                          <option>NO</option>
                        </select>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="formFile" class="form-label">Partida de nacimiento</label>
                        <select id="PartidaNacimiento" name="PartidaNacimiento" class="form-control">
                          <option>{{$preregistro->PartidaNacimiento}}</option>
                          <option>SÍ</option>
                          <option>NO</option>
                        </select>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="formFile" class="form-label">Copia de DUI</label>
                        <select id="CopiaDui" name="CopiaDui" class="form-control">
                          <option>{{$preregistro->CopiaDui}}</option>
                          <option>SÍ</option>
                          <option>NO</option>
                        </select>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="formFile" class="form-label">Declaración jurada</label>
                        <select id="DeclaracionJurada" name="DeclaracionJurada" class="form-control">
                          <option>{{$preregistro->DeclaracionJurada}}</option>
                          <option>SÍ</option>
                          <option>NO</option>
                        </select>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="formFile" class="form-label">Copia DUI de responsable</label>
                        <select id="CopiaDuiResponsable" name="CopiaDuiResponsable" class="form-control">
                          <option>{{$preregistro->CopiaDuiResponsable}}</option>
                          <option>SÍ</option>
                          <option>NO</option>
                        </select>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="formFile" class="form-label">Certificado original</label>
                        <select id="CertificadoOriginal" name="CertificadoOriginal" class="form-control">
                          <option>{{$preregistro->CertificadoOriginal}}</option>
                          <option>SÍ</option>
                          <option>NO</option>
                        </select>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="formFile" class="form-label">Certificado de notas</label>
                        <select id="CertificadoNotas" name="CertificadoNotas" class="form-control">
                          <option>{{$preregistro->CertificadoNotas}}</option>
                          <option>SÍ</option>
                          <option>NO</option>
                        </select>
                      </div>
                      <div class="form-group col-md-6">
                          <label for="DocumentoPdf" class="form-label">Documentos Escaneados</label>
                          <input type="file" id="DocumentoPdf" name="DocumentoPdf" class="form-control">
                          @error ('DocumentoPdf')
                            <span class="error text-danger">{{$message}}</span>
                          @enderror
                      </div>
                      <div class="form-group col-md-6">
                      <br>
                      <input type="submit" class="btn btn-primary" value="Guardar" name="Guardar">
                      <br><br><br>
                      </div>

                      <!---SECCION DE SEDE--->
                      <?php
                      $usuario = 'root';
                      $password = '';
                      $db = new PDO('mysql:host=localhost;dbname=bvudb', $usuario, $password);
                      ?>
                      <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputAddress">Código de sede:</label>
                        <select readonly id="Sede" name="CodigoSede" class="form-control">
                          <option>{{$preregistro->CodigoSede}}</option>
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
                        <select readonly id="Sede" name="Sede" class="form-control">
                          <option>{{$preregistro->Sede}}</option>
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
                      <input readonly value="{{$preregistro->Nombres}}" type="text" class="form-control" id="Nombres" name="Nombres" placeholder="Digite los nombres">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Apellidos</label>
                      <input readonly value="{{$preregistro->Apellidos}}" type="text" class="form-control" id="Apellidos" name="Apellidos" placeholder="Digite los apellidos">
                    </div>
                  </div>

                  <!---Segunda fila"--->
                  <div class="form-row" style="margin-bottom:268px">
                  <div class="form-group col-md-6">
                    <label for="inputAddress">Año de inscripción</label>
                    <select readonly id="Año" name="Año" class="form-control">
                      <option>{{$preregistro->Año}}</option>
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
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputAddress2">NIE</label>
                    <input readonly value="{{$preregistro->NIE}}" type="text" class="form-control" id="NIE" name="NIE" placeholder="Digite el NIE">
                  </div>
                  </div>
                  <div class="form-row" style="margin-bottom:368px">
                    <div class="form-group col-md-6">
                      <label for="inputCity">Fecha de recepción</label>
                      <input readonly value="{{$preregistro->FechaRecepcion}}"  class="form-control" id="FechaRecepcion" name="FechaRecepcion">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="">DUI</label>
                      <input readonly value="{{$preregistro->DUI}}" type="text" class="form-control" id="DUI" name="DUI" placeholder="Digite el DUI">
                    </div>
                    </div>
                    <div class="form-row"  style="margin-bottom:468px">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Nombre de quién recibe</label>
                        <input readonly value="{{$preregistro->PersonaRecibido}}" type="text" class="form-control" id="PersonaRecibido" name="PersonaRecibido" placeholder="Digite el nombre del recepcionista">
                      </div>

                      <div class="form-group col-md-6">
                        <label for="inputZip">Estado del estudiante</label>
                        <select readonly id="Estado" name="Estado" class="form-control">
                          <option>{{$preregistro->Estado}}</option>
                          <option>ACTIVO</option>
                          <option>INACIVO</option>
                          <option>APROBADO</option>
                          <option>REPROBADO</option>
                          <option>DESERTOR</option>

                        </select>

                      </div>
                    </div>
                    <!---SECCION  DE DATOS MATRICULA--->
                    <hr>
                  <h5><i><strong>DATOS DE MATRICULA</strong></i></h5>

                  <!---Primera fila--->
                  <div class="form-row" style="margin-bottom:50px">
                      <div class="form-group col-md-6">
                          <label for="inputEmail4">Turno:</label>
                          <select readonly class="form-control" name="Turno">
                              <option>{{$preregistro->Turno}}</option>
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
                          <select readonly class="form-control" name="Jornada">

                              <option>{{$preregistro->Jornada}}</option>
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
                          <select readonly class="form-control" name="Modalidad">
                              <option>{{$preregistro->Modalidad}}</option>
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
                          <select readonly class="form-control" name="TipoIngreso">

                              <option>{{$preregistro->TipoIngreso}}</option>
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
                           <select readonly class="form-control" name="Grado">

                              <option>{{$preregistro->Grado}}</option>
                              <option>7° GRADO</option>
                              <option>8° GRADO</option>
                              <option>9° GRADO</option>
                              <option>PRIMER AÑO</option>
                              <option>SEGUNDO AÑO</option>
                          </select>
                          @error ('GradoMatricular')
                             <span class="error text-danger">{{$message}}</span>
                          @enderror
                      </div>

                      <div class="form-group col-md-6">
                          <label for="inputEmail4">Sección:</label>
                          <select readonly class="form-control" name="Seccion">

                              <option>{{$preregistro->Seccion}}</option>
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

                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Observaciones</label>
                        <textarea readonly class="form-control" id="Observacion" name="Observacion" rows="3">
                          {{$preregistro->Observacion}}
                        </textarea>
                      </div>
                  </div>
                  <div class="form-group">
                    <div class="form-group col-md-6">
                    <br>
                    <input type="submit" class="btn btn-primary" value="Actualizar" name="Guardar">
                    <a class="btn btn-danger" href="{{route('pre.index')}}">Cancelar</a>
                    </div>
                  </div>
                </div>
                </div>
              </form>
                </div>
            </div>
        </div>
@endsection
