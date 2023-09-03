@extends('welcome')
@section('content')
<?php
$project = [
'1','1','1','1','1','1','1','1','1'
];
function up(){
    '<script>
    window.scrollTo(0, 0);
    </script>';
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/homeadmin.css')}}">
  </head>

  <body>
    <div class="p-1">
      <div class="my-1">
        <h3 class="text-center text-info">¡Bienvenido Administrador!</h3>
        <h3 class="text-center text-info">Aqui puedes asignar a los interesados</h3>
        <div class="row">
          <div class="col-12">
            <button class="btn btn-light mx-auto d-block">Cerrar sesión</button>
          </div>
        </div>
        <div class="container-fluid">
          @if($project)
          <div class="row">
            @foreach($project as $dato)
            <div class="mt-2 col-auto">
              <div class="content card">
                <div class="logo w-100">
                  <img src="{{asset('img/logo.png')}}" alt="*" class="img-logo">
                  <i class="bi bi-x-circle" id="delete" (click)="delete(dato)"></i>
                </div>
                <div class="texto">
                  <div class="text-section">
                    <h5 class="text-danger my-1 text-start">Titulo</h5>
                    <p class="text-truncate my-1 text-start"><strong>dato.nombre_proyecto</strong></p>
                    <h5 class="text-danger my-1 text-start">Nivel academico que se requiere: </h5>
                    <p class="text-truncate my-1 text-start"><strong>dato.n_academico_requerido</strong></p>
                  </div>

                  <div class="button-section">
                    <!-- <button class="btn btn-info mx-1" (click)="print(dato)"><i class="bi bi-printer"></i></button>
                    <button md-button (click)="readmore(dato)">Leer Más</button> -->
                  </div>

                </div>
                <div class="mt-1">
                  <a class="btn btn-danger d-block w-100 py-2 this border-0" *ngIf="dato.solicitud_asignada === false" (click)="listar(dato)">Seleccionar</a>
                  <button class="btn btn-danger d-block w-100 py-2 this border-0" disabled *ngIf="dato.solicitud_asignada === true">Ya se ha asignado</button>

                </div>
              </div>

            </div>
            @endforeach

            <!-- <app-card-admin [dato]="dato" md-card (cerrar)="cerrardetail()"></app-card-admin>
            <app-admin-delete [dato]="datodelete" md-card (cerrardelete)="cerrardelete()"></app-admin-delete>
            <app-pageimprimir [dato]="imprimir" (closeprint)="cerrarimprimir()"></app-pageimprimir>
            <app-listado [dato]="listado" (closelistado)="cerrarlistar()"></app-listado> -->

            <button class="btn btn-custom" onclick="up()"><i class="bi bi-arrow-up-circle"></i></button>
          </div>
          @else
          <div class="row justify-content-center w-100">
            <img src="{{asset('img/admin.jpeg')}}" alt="" class="nohay">
            <h3 class="text-center nohay">No hay Proyectos para asignar, ¡espera un poco!</h3>
          </div>
        </div>
      </div>
    </div>
    @endif
  </body>

</html>
@endsection
