<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <title>Reporte PDF</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- JavaScript -->

    <style media="screen">
      th{
        text-align: center;
        background-color: lightgray;
      }
      h2{
        text-align: left;

        font-family: 'Roboto';

      }
      img{
        width: 115px;
        height: 115px;
      }
      .logo{
        float: right;
      }
    </style>
  </head>
  <body>
      <img class="logo" src="{{asset('udb.jpg')}}" alt="">
      <br>
<h2>Reporte de Matriculados</h2>
    <br><br>
    <table class="table table-bordered" id="tabla" style="text-align:center">
        <thead>
            <tr>
                <th>NIE</th>
                <th>Nombre completo</th>
                <th>Sexo</th>
                <th>Email</th>
                <th>Grado</th>
                <th>Sección</th>
                <th>Turno</th>
                <th>Sede</th>

            </tr>
        </thead>
        <tbody>

          @foreach($data as $dato)

        <tr>
        <td>{{$dato->NIE}}</td>
        <td>{{$dato->Nombres.' '.$dato->Apellidos}}</td>
        <td>{{$dato->Sexo}}</td>
        <td>{{$dato->Email}}</td>
        <td>{{$dato->GradoMatricular}}</td>
        <td>{{$dato->Seccion}}</td>
        <td>{{$dato->Turno}}</td>
        <td>{{$dato->Sede}}</td>

        </tr>

        @endforeach
    </table>

  </body>
</html>
