<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <title>Reporte PDF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
    <h1>Hola</h1>
    <table class="table table-striped table-bordered" id="tabla" style="text-align:center;border:black 5px">
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
