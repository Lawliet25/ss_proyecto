@extends('layout.template')

@section('title','Reporte de alumnos')

@section('content')

<div class="container">

  <div class="alert alert-warning" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  Presione el botón que genera el reporte de alumnos por grado de su interés:
  </div>

  <table class="table table-striped table-bordered table-hover" id="tabla" style="text-align:center">
      <thead>

          <tr>
            <td>SÉPTIMO GRADO</td>
            <td>OCTAVO GRADO</td>
            <td>NOVENO GRADO</td>
            <td>PRIMER AÑO BACHILLERATO</td>
            <td>SEGUNDO AÑO BACHILLERATO</td>
          </tr>
          <tr>
            <td><img src="{{asset('reporte.jpg')}}" width="150px"alt=""></td>
            <td><img src="{{asset('reporte.jpg')}}" width="150px"alt=""></td>
            <td><img src="{{asset('reporte.jpg')}}" width="150px"alt=""></td>
            <td><img src="{{asset('reporte.jpg')}}" width="150px"alt=""></td>
            <td><img src="{{asset('reporte.jpg')}}" width="150px"alt=""></td>
          </tr>
          <tr>
              <th style="text-align:center"><a href="{{route('reportes.pdf7')}}" target="_blank" class="btn btn-primary">Generar PDF</a></th>
              <th style="text-align:center"><a href="{{route('reportes.pdf8')}}" target="_blank" class="btn btn-primary">Generar PDF</a></th>
              <th style="text-align:center"><a href="{{route('reportes.pdf9')}}" target="_blank" class="btn btn-primary">Generar PDF</a></th>
              <th style="text-align:center"><a href="{{route('reportes.pdf1')}}" target="_blank" class="btn btn-primary">Generar PDF</a></th>
              <th style="text-align:center"><a href="{{route('reportes.pdf2')}}" target="_blank" class="btn btn-primary">Generar PDF</a></th>

          </tr>

      </thead>

                </div>
            </div>

        </div>

@endsection
