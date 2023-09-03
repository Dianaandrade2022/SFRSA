@extends('welcome')
@section('content')
<?php
$project = [
];

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  </head>

  <body class="antialiased">

    <div class="p-1">
      <div class="my-1">
        <h3 class="text-center">¡Bienvenido usuario!</h3>
        <div class="container-fluid">
        @if($project)
          <div class="row">
            @foreach($project as $dato)
            <div md-card class="mt-2 col-auto">
              <div class="content card">
                <div class="logo w-100">
                  <img src="{{asset('img/logo.png')}}" alt="logo" class="img-logo">
                </div>
                <div class="texto">
                  <div class="text-section">
                    <h5 class="text-danger my-1 text-start">Titulo</h5>
                    <p class="text-truncate my-1 text-start"><strong>dato.nombre_proyecto</strong></p>
                    <h5 class="text-danger my-1 text-start">Nivel academico que se requiere: </h5>
                    <p class="text-truncate my-1 text-start"><strong>dato.n_academico_requerido</strong></p>
                    <h5 class="text-danger my-1 text-start">Descripción: </h5>
                    <div class="button-section">
                      <button md-button (click)="readmore(dato)">Leer Más</button>
                    </div>
                  </div>
                </div>
                <div class="mt-1">
                  <button class="btn btn-danger d-block w-100 py-2 this border-0" *ngIf="dato.solicitud_asignada === false" (click)="openpostularse(dato)">Postularse</button>
                  <button class="btn btn-danger d-block w-100 py-2 this border-0" disabled *ngIf="dato.solicitud_asignada === true">Ya has postulado</button>
                </div>

              </div>
            </div>

            <app-cardusuario [dato]="dato" md-card (cerrar)="cerrardetail()"></app-cardusuario>
            <app-postularse [dato]="datopostularse" (cerrarpostularse)="cerrarpostulate()"></app-postularse>
            @endforeach
          </div>
          @else
          <div class="row justify-content-center w-100">
            <img src="{{asset('img/nohay.jpg')}}" alt="" class="nohay">
            <h3 class="text-center nohay">No hay Proyectos en los que puedas postularte</h3>
          </div>
        </div>
      </div>
    </div>
    @endif
  </body>

</html>
@endsection
