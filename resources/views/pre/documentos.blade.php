@extends('layout.template')

@section('title','Formulario de preregistro')

@section('content')
<div class="container">
            <div class="row">
                <h3>Agregar documentos a alumno</h3>
            </div>
            <div class="row">
                <div class="col-md-10">
                    <a type="button" class="btn btn-danger btn-md" href="{{route('pre.index')}}">Regresar</a>
                <br>
                @if (session('status'))
                  <div class="alert alert-success">
                    {{session('status')}}
                  </div>
                @endif

                <br>
                <form style="" action="{{route('pre.update',$preregistro->id)}}" method="POST">
                  @csrf
                  <div class="panel panel-info">
                    <div class="panel-heading">Información y documentación general del alumno</div>
                    <div class="panel-body">
                      <div class="form-group col-md-6">
                        <label for="" class="form-label">Ficha de registro</label>
                        <input class="form-control" type="file" id="FichaRegistro" name="FichaRegistro">
                        {{$preregistro->FichaRegistro}}
                      </div>
                      <div class="form-group col-md-6">
                        <label for="" class="form-label">Foto de certificado</label>
                        <input class="form-control" type="file" id="FotoCertificado" name="FotoCertificado">
                        {{$preregistro->FotoCertificado}}
                      </div>
                      <div class="form-group col-md-6">
                        <label for="formFile" class="form-label">Foto de título</label>
                        <input class="form-control" type="file" id="FotoTitulo" name="FotoTitulo">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="formFile" class="form-label">Partida de nacimiento</label>
                        <input class="form-control" type="file" id="PartidaNacimiento" name="PartidaNacimiento">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="formFile" class="form-label">Copia de DUI</label>
                        <input class="form-control" type="file" id="CopiaDUI" name="CopiaDUI">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="formFile" class="form-label">Declaración jurada</label>
                        <input class="form-control" type="file" id="DeclaracionJurada" name="DeclaracionJurada">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="formFile" class="form-label">Copia DUI de responsable</label>
                        <input class="form-control" type="file" id="CopiaDUIResponsable" name="CopiaDUIResponsable">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="formFile" class="form-label">Certificado original</label>
                        <input class="form-control" type="file" id="CertificadoOriginal" name="CertificadoOriginal">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="formFile" class="form-label">Certificado de notas</label>
                        <input class="form-control" type="file" id="CertificadoNotas" name="CertificadoNotas">
                      </div>
                      <div class="form-group col-md-6">
                      <br>
                      <input type="submit" class="btn btn-primary" value="Guardar" name="Guardar">
                      <br><br>
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
                        <select readonly id="Estado" name="Estado" class="form-control">
                          <option>{{$preregistro->Estado}}</option>
                          <option>Activo</option>
                          <option>Inactivo</option>
                        </select>
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
