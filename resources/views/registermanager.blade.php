@extends('welcome')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>

        <link rel="stylesheet" href="{{ asset('css/registerm.css') }}">
    </head>
    <body class="antialiased">

    <div class="container">
  <div class="row py-2">
    <div class="col-lg-6 col-md-6 col-sm-12">
      <div class="registro-form">

        <form class="mt-3"  [formGroup]="usuario">
          <h1>Complete los datos porfavor:</h1>
          <h5><b>Nombre completo:</b></h5>
          <input type="text" formControlName="username" >
          <h5><b>Correo electronico:</b></h5>
          <input type="email" formControlName="email">
          <p class="text-danger text-center" *ngIf="usuario.get('email')?.invalid">Escriba un correo válido</p>
          <h5><b>Contraseña:</b></h5>
          <input type="password" formControlName="password1" >
          <h5><b>Vuelve a ingresar tu contraseña:</b></h5>
          <input type="password" formControlName="password2" >
          <p class="text-danger" *ngIf="usuario.get('password2')?.value !== usuario.get('password1')?.value">Las contraseñas no coinciden.</p>
          <p class="text-danger" *ngIf="usuario.get('password2')?.invalid">Escriba una contraseña válida.</p>
          <h5><b>Ingrese su numero de Empleado:</b></h5>
          <input type="text" formControlName="nempleado" class="text-capitalize">

          <p class="text-danger" *ngIf="usuario.get('nempleado')?.invalid">Por favor ingresa una combinación como (m1234 or m456789).</p>
          <p id="error-message" style="color: red; display: none;">Recuerda que la contraseña debe tener minimo 8 caracteres o La contraseña no coincide.</p>
          <p class="text-secondary text-center my-3">Si tus datos son correctos da clic aquí</p>
          <button class="btn btn-danger" [disabled]="usuario.invalid" (click)="registrarmanager()">Registrarte</button>

        </form>

      </div>

    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 mt-sm-4">
      <div class="image-section">
        <div class="transbox2">
          <a href="/">Ya tengo cuenta </a>
        </div>
      </div>
    </div>
  </div>
</div>

    </body>
</html>
@endsection
