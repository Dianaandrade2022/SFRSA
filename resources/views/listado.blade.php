
@extends('welcome')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>

        <link rel="stylesheet" href="{{ asset('css/listado.css') }}">
    </head>
    <body class="antialiased">

    <div class="container-fluid px-4 mt-2" *ngIf="dato" >
  <div class="row">
    <h3 class="text-center">Listado de aspirantes del proyecto {{dato.nombre_proyecto}}</h3>
    <div class="col-12">
        <a class="btn btn-dark" (click)="close()"><i class="bi bi-skip-backward me-1"></i>Volver</a>
    </div>
    <div *ngIf="show === false;else noexiste">
      <div class="col-lg-6 col-md-6 mt-1" *ngFor="let i of datospostulante">
        <div class="row">
          <p class="col-xl-7 col-lg-5 col-md-5 col-sm-12 text-truncate">{{i.name}}</p>
          <div class="col-xl-5 col-lg-7 col-md-7 col-sm-12">
          <button class="btn btn-info me-2" (click)="opendetail(i)">Detalles</button>
          <button class="btn btn-primary me-2" (click)="seleccionar(i)" >Seleccionar</button>
        </div>
        </div>
      </div>
      <button class="btn btn-custom"><i class="bi bi-arrow-up-circle"></i></button>
    </div>
    <ng-template #noexiste>
      <h5 class="text-danger text-center">Aún no se han postulado</h5>
    </ng-template>
    <app-detalles [dato]="datopostulante" (cerrar)="cerrardetail()"></app-detalles>
  </div>
</div>

    </body>
</html>
@endsection
