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

                    <div class="form-group col-md-6">

                      <label for="inputEmail4">Nombres</label>
                      <input readonly value="{{$preregistro->Nombres}}" type="text" class="form-control" id="Nombres" name="Nombres" placeholder="Digite los nombres">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Apellidos</label>
                      <input readonly value="{{$preregistro->Apellidos}}" type="text" class="form-control" id="Apellidos" name="Apellidos" placeholder="Digite los apellidos">
                    </div>
                  <div class="form-group col-md-6">
                    <label for="inputAddress">Grado al que se inscribe</label>
                    <input readonly value="{{$preregistro->Grado}}" type="text" class="form-control" id="Grado" name="Grado" placeholder="Digite el grado al que se inscribe">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputAddress2">NIE</label>
                    <input readonly value="{{$preregistro->NIE}}" type="text" class="form-control" id="NIE" name="NIE" placeholder="Digite el NIE">
                  </div>
                    <div class="form-group col-md-6">
                      <label for="inputCity">Fecha de recepción</label>
                      <input readonly value="{{$preregistro->FechaRecepcion}}"  class="form-control" id="FechaRecepcion" name="FechaRecepcion">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="">DUI</label>
                      <input readonly value="{{$preregistro->DUI}}" type="text" class="form-control" id="DUI" name="DUI" placeholder="Digite el DUI">
                    </div>
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Nombre de quién recibe</label>
                        <input readonly value="{{$preregistro->PersonaRecibido}}" type="text" class="form-control" id="PersonaRecibido" name="PersonaRecibido" placeholder="Digite el nombre del recepcionista">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputZip">Estado del estudiante</label>
                        <select id="Estado" name="Estado" class="form-control">
                          <option>{{$preregistro->Estado}}</option>
                          <option>Activo</option>
                          <option>Inactivo</option>
                        </select>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Año de matrícula</label>
                        <input readonly value="{{$preregistro->Año}}" type="text" class="form-control" id="Año" name="Año">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Observaciones</label>
                        <textarea readonly class="form-control" id="Observacion" name="Observacion" rows="3">
                          {{$preregistro->Observacion}}
                        </textarea>
                      </div>
                </div>
                </div>
              </form>
                </div>
            </div>
        </div>
@endsection
