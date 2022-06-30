<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Reporte PDF</title>
  </head>
  <body>
    Holaaaaaaaaaaaaaaaaaa
    <br>

    <table class="table table-striped table-bordered table-hover" id="tabla">
        <thead>
            <tr>
                <th>ID</th>
                <th>NIE</th>
                <th>DUI</th>
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
        <td>{{$dato->id}}</td>
        <td>{{$dato->NIE}}</td>
        <td>{{$dato->DUI}}</td>
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
