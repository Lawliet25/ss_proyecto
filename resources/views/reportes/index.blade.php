@extends('layout.template')

@section('title','Reporte de alumnos')

@section('content')

<div class="container">

  <div class="alert alert-warning" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  Presione el botón que genera el reporte de alumnos de su interés:
  </div>
<h3>Reporte por grado</h3>
  <table class="table table-striped table-bordered table-hover" id="tabla" style="text-align:center">
      <thead style="font-weight:bold;">

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

    </table><hr>
      <h3>Reporte por sede y año</h3>

      <table class="table table-striped table-bordered table-hover" id="tabla" style="text-align:center;">
          <thead style="font-weight:bold;">

              <tr>
                <td>Nombre de sede </td>
                <td>2020</td>
                <td>2021</td>
                <td>2022</td>
                <td>2023</td>
              </tr>
              <tr>
                <td> <h4>Bachillerato Virtual</h4> </td>
                <td><a style="" title="Descargar" class="btn btn-danger btn-circle" href="../../public/exportar/alumnosSedes"><span class="glyphicon glyphicon-download-alt"></span></a></td>
                <td><a style="" title="Descargar" class="btn btn-danger btn-circle" href="../../public/exportar/alumnosSedes2"><span class="glyphicon glyphicon-download-alt"></span></a></td>
                <td><a style="" title="Descargar" class="btn btn-danger btn-circle" href="../../public/exportar/alumnosSedes3"><span class="glyphicon glyphicon-download-alt"></span></a></td>
                <td><a style="" title="Descargar" class="btn btn-danger btn-circle" href="../../public/exportar/alumnosSedes4"><span class="glyphicon glyphicon-download-alt"></span></a></td>

              </tr>
              <tr>
                <td> <h4>TNA-UNICEF</h4> </td>
                <td><a style="" title="Descargar" class="btn btn-danger btn-circle" href="../../public/exportar/alumnosSedes11"><span class="glyphicon glyphicon-download-alt"></span></a></td>
                <td><a style="" title="Descargar" class="btn btn-danger btn-circle" href="../../public/exportar/alumnosSedes12"><span class="glyphicon glyphicon-download-alt"></span></a></td>
                <td><a style="" title="Descargar" class="btn btn-danger btn-circle" href="../../public/exportar/alumnosSedes13"><span class="glyphicon glyphicon-download-alt"></span></a></td>
                <td><a style="" title="Descargar" class="btn btn-danger btn-circle" href="../../public/exportar/alumnosSedes14"><span class="glyphicon glyphicon-download-alt"></span></a></td>

              </tr>

              <tr>
                <td> <h4>TNA- Centro Escolar Las Brisas-Soyapango</h4> </td>
                <td><a style="" title="Descargar" class="btn btn-danger btn-circle" href="../../public/exportar/alumnosSedes21"><span class="glyphicon glyphicon-download-alt"></span></a></td>
                <td><a style="" title="Descargar" class="btn btn-danger btn-circle" href="../../public/exportar/alumnosSedes22"><span class="glyphicon glyphicon-download-alt"></span></a></td>
                <td><a style="" title="Descargar" class="btn btn-danger btn-circle" href="../../public/exportar/alumnosSedes23"><span class="glyphicon glyphicon-download-alt"></span></a></td>
                <td><a style="" title="Descargar" class="btn btn-danger btn-circle" href="../../public/exportar/alumnosSedes24"><span class="glyphicon glyphicon-download-alt"></span></a></td>

              </tr>

              <tr>
                <td> <h4>TNA- Complejo Educativo Joaquín Rodezno-San Salvador</h4> </td>
                <td><a style="" title="Descargar" class="btn btn-danger btn-circle" href="../../public/exportar/alumnosSedes31"><span class="glyphicon glyphicon-download-alt"></span></a></td>
                <td><a style="" title="Descargar" class="btn btn-danger btn-circle" href="../../public/exportar/alumnosSedes32"><span class="glyphicon glyphicon-download-alt"></span></a></td>
                <td><a style="" title="Descargar" class="btn btn-danger btn-circle" href="../../public/exportar/alumnosSedes33"><span class="glyphicon glyphicon-download-alt"></span></a></td>
                <td><a style="" title="Descargar" class="btn btn-danger btn-circle" href="../../public/exportar/alumnosSedes34"><span class="glyphicon glyphicon-download-alt"></span></a></td>

              </tr>

              <tr>
                <td> <h4>TNA- Centro Escolar Dolores C-Retes-San Miguel</h4> </td>
                <td><a style="" title="Descargar" class="btn btn-danger btn-circle" href="../../public/exportar/alumnosSedes41"><span class="glyphicon glyphicon-download-alt"></span></a></td>
                <td><a style="" title="Descargar" class="btn btn-danger btn-circle" href="../../public/exportar/alumnosSedes42"><span class="glyphicon glyphicon-download-alt"></span></a></td>
                <td><a style="" title="Descargar" class="btn btn-danger btn-circle" href="../../public/exportar/alumnosSedes43"><span class="glyphicon glyphicon-download-alt"></span></a></td>
                <td><a style="" title="Descargar" class="btn btn-danger btn-circle" href="../../public/exportar/alumnosSedes44"><span class="glyphicon glyphicon-download-alt"></span></a></td>

              </tr>

          </thead>

        </table>





      </div>
      </div>

      </div>

        </div>
        <br>
        <hr>


@endsection
