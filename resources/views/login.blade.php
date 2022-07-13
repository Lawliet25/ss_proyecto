@extends('layout.template')

@section('title','Formulario de preregistro')

@section('content')

        <div class="form-body">

            <img src="{{asset('iniciar-sesion.png')}}" alt="">
            <form class="login-form" method="post" action="">
              @csrf
                <input type="text" name="email" placeholder="Nombre de usuario o email">
                <input type="password" name="password" placeholder="Contraseña">
                <button>Iniciar Sesión</button>

            </form>
            @if (session('status'))
              <div style="width:78%; display: block; margin: auto;" class="alert alert-danger">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                {{session('status')}}
              </div>
            @endif
        </div>

        <style media="screen">
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .form-body
        {

            background-color:#003566;
            width: 400px;
            height: 450px;
            min-width: 300px;
            border-radius: 10px;
            border-top-left-radius: 50px;
            border-bottom-right-radius: 50px;
            border: solid 1px #A2D2FF ;
            margin-top: 5%;
            margin-left: 30%;
        }

        .form-body img
        {
            width: 150px;
            display: block;
            margin: 20px auto;

        }

        .text
        {
            text-align: center;
            font-size: 1.5rem;
            font-weight: 680;
            color: #FFD60A;
            margin-bottom: 25px;

        }

        .form-body input{
            display: block;
            margin: auto;
            height: 40px;
            width: 75%;
            padding-left: 10px;
            color: #FFD60A;
            border: 1px solid #fff;
            border-radius: 2px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            background-color: transparent;
            border-top-left-radius: 10px;
            font-size: 12px;
            outline: none;
        }

        .form-body input[type="password"]
        {
            margin-top: 20px;
        }

        ::placeholder{
            font-size: 12px;
            color: #fff;
        }

        .form-body input:hover
        {
            transition: .5s;
            border: 1px solid #A2D2FF;
            color: #A2D2FF;
        }

        .form-body button
        {
            display: block;
            margin: auto;
            margin-top: 25px;
            margin-bottom: 18px;
            height: 40px;
            width: 78%;
            background: transparent;
            color: #E5E5E5;
            border-radius: 1px;
            outline: none;
            cursor: pointer;
            border: 2px solid #A2D2FF;
            transition: all .5s ease;

        }

        .form-body button:hover{
            color: #FFD60A;
            border: 2px solid #A2D2FF;


        }
        </style>


  @endsection
