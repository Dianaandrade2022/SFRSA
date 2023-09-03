
@extends('welcome')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>

        <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    </head>
    <body class="antialiased">

    <div class="container">
    <div class="row py-2">
    <div class="col-lg-6 md-6 col-sm-12 login-form">
      <img class="logo" src="{{asset('img/logo.png')}}" alt="Logo">
      <h5 class="my-3">Para ver los proyectos primero:</h5>
      <h1 class="my-3">Iniciar Sesión</h1>
      <form class="inicioS" [formGroup]="form" >
        <input class="mb-2" type="text" placeholder="Nombre de usuario" formControlName="usuario" >
        <input class="mb-2" type="password"  placeholder="Contraseña"  formControlName="password">
        <div class="d-block mx-auto text-center">
          <button [disabled]="form.invalid" class="btn btn-danger" (click)="login()">Ingresar</button><br>
        <a href="/forgot"><b>Recuperar contraseña</b></a>
        </div>
        <h5 class="mt-5 mb-4">Si no eres usuario todavia, <br> Registrate aquí</h5>
      </form>
      <div class="">
        <a href="/registro" class="registro text-light d-block w-50 mx-auto">Registrarte</a>
      </div>
    </div>
    <div class="col-lg-6 md-6 col-sm-12 mt-sm-5">
      <div class="image-section">
        <div class="transbox">
          <a href="/registropersonal" class="mx-auto"> <b>Registrarse Como <br> Encargado de Area</b> </a>
        </div>
      </div>
    </div>
  </div>
</div>

    </body>
</html>
@endsection
