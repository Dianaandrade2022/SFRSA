@extends('welcome')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>

        <link rel="stylesheet" href="{{ asset('css/registro.css') }}">
    </head>
    <body class="antialiased">

    <div class="container">
  <div class="row py-2">
    <div class="col-lg-6 col-md-6 col-sm-12">
      <form [formGroup]="formuser">
        <h1 class="text-info">Complete los datos por favor:</h1>

        <h5><b>Nombre completo:</b></h5>
        <p class="text-danger d-inline" *ngIf="formuser.get('username')?.invalid">*Minimo 8 caracteres</p>
        <input type="text" required  formControlName="username">

        <h5><b>Correo electrónico:</b></h5>
        <p class="text-danger d-inline"  *ngIf="formuser.get('email')?.invalid">*Campo requerido</p>
        <input type="email" required formControlName="email">

        <div class="alert alert-danger py-1 my-1 w-75 mx-auto" *ngIf="">
          <b class="text-danger" >Coloca un correo válido</b>
        </div>

        <h5><b>Contraseña:</b></h5>
        <p class="text-danger d-inline" *ngIf="formuser.get('password1')?.value === ''">*Campo requerido</p>
        <input type="password" required formControlName="password1">

        <h5><b>Vuelve a ingresar tu contraseña:</b></h5>
        <p class="text-danger d-inline" *ngIf="formuser.get('password2')?.value === ''">*Campo requerido</p>
        <input type="password" required formControlName="password2">
        <p class="text-danger d-inline" *ngIf="formuser.get('password2')?.invalid || formuser.get('password1')?.invalid ">La contraseña debe conincidir en ambos campos</p>

        <p  class="text-danger" *ngIf="formuser.get('password2')?.invalid || formuser.get('password1')?.invalid" >Recuerda que la contraseña debe tener mínimo 8 caracteres o la contraseña no coincide.</p>
        <p class="text-success" *ngIf="formuser.get('password2')?.valid && formuser.get('password1')?.valid">Contraseña válida <i class="bi bi-check-lg mx-1 text-success"></i></p>
        <button class="btn btn-danger" [disabled]="formuser.invalid" (click)="registrarfire()">Registrarte</button>
      </form>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 mt-sm-5">
      <div class="image-section">
        <div class="transbox2">
          <a href="/">Ya tengo cuenta</a>
        </div>
      </div>
    </div>
  </div>
</div>

    </body>
</html>
@endsection
