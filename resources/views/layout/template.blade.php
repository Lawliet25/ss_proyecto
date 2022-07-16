<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
</head>
<body>
    <style media="screen">
    table{
      text-transform: uppercase;
    }
      a{
        color: #FFD60A;
      }
      input{
        text-transform: uppercase;
      }
      .btn-primary{
        text-transform: capitalize;
      }
      textarea{
        text-transform: uppercase;
      }
      option{
        text-transform: uppercase;
      }
      select{
        text-transform: uppercase;
      }
    </style>
    <nav class="navbar navbar-light" style="background-color:#003566;">
        <div class="container-fluid" >
          <div class="navbar-header" >
            <button type="button" class="navbar-toggle collapsed"
                    data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Desplegar navegacion</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

              <a class="navbar-brand" href="{{route('pre.index')}}">Bachillerato Virtual</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              @guest
              <li><a style="font-size:17px;" href="{{route('login')}}">Login</a></li>
              @else
                <li class="dropdown">
                <a href="{{route('pre.index')}}">Alumnos PreRegistrados</a>
                </li>
              <li class="dropdown">
                <a href="{{route('Ficha.index')}}">Información de alumnos</a>

              </li>
              <li class="dropdown">
                <a href="{{route('sedes.index')}}">Sedes</a>

              </li>
              <li class="dropdown">
                <a href="{{route('reportes.index')}}">Reportes</a>

              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">

                <form style="margin-top:12px; font-size:15px;" class="" action="{{route('logout')}}" method="post">
                @csrf
                  <a style="" href="#" onclick="this.closest('form').submit()">Cerrar sesión</a>
                </form>

                @endguest
            </ul>

          </div>
        </div>
      </nav>



<div class="container">
    @yield('content')
</div>

<body>
</html>
