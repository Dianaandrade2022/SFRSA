@extends('welcome')
@section('content')
<?php
$project = [
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
    <link rel="stylesheet" href="{{asset('css/postularse.css')}}">

</head>
<body>

<div class="p-1">
    <div class="my-1">
        <h3 class="text-center">¡Bienvenido!</h3>
        <div class="w-100">
          <button class="d-block bg-white w-50 btn btn-light border-danger mx-auto" data-bs-toggle="modal" data-bs-target="#addproject"  aria-hidden="true">Agregar un Proyecto <i class="bi bi-plus-lg text-danger" ></i></button>
        </div>
        <div class="modal fade" id="addproject" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title  text-center fs-5" id="exampleModalLabel">Ingrese los siguientes datos</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form >
                  <div class="row">
                    <div class="col-12">
                      <p class="my-0">Nombre de usuario: </p>
                      <input type="text" class="form-control" placeholder="Nombre con apellidos" formControlName="username" >
                    </div>
                    <div class="col-12">
                      <p class="my-0">Nombre del proyecto: </p>
                      <input type="text" class="form-control" formControlName="nombre_proyecto">
                    </div>
                    <div class="col-12">
                      <p class="my-0">Nombre de la empresa: </p>
                      <input type="text" class="form-control" formControlName="nombre_empresa">
                    </div>
                    <div class="col-12">
                      <p class="my-0">Departamento: </p>
                      <input type="text" class="form-control" formControlName="departamento">
                    </div>
                    <div class="col-12">
                      <p class="my-0">Nivel académico requerido: </p>
                      <input type="text" class="form-control" formControlName="n_academico_requerido">
                    </div>
                    <div class="col-12">
                      <p class="my-0">Descripcion: </p>
                      <textarea class="form-control" rows="3" formControlName="descripcion"></textarea>
                    </div>
                    <div class="col-12">
                      <p class="my-0">Ubicacion: </p>
                      <input type="text" class="form-control" formControlName="ubicacion">
                    </div>
                    <div class="col-12">
                      <p class="my-0">Horario Inicio: </p>
                      <input type="time" class="form-control w-50" formControlName="fechainicio" >
                    </div>
                    <div class="col-12">
                      <p class="my-0">Horario Fin: </p>
                      <input type="time" class="form-control w-50" formControlName="fechafin">
                    </div>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" [disabled]="form.invalid" onclick="addproyect()">Añadir proyeccto</button>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid">
        @if($project)
          <div class="row">
          @foreach($project as $dato)
            <div md-card class="mt-2 col-lg-4 col-md-5 col-sm-6 col-xxl-auto col-xl-3">
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
                      <button md-button onclick="readmore(dato)" >Leer Más</button>
                    </div>
                  </div>
                </div>
                <div class="mt-1">
                  <!-- <button class="btn btn-danger d-block w-100 py-2 this border-0" v-if="status === true" data-bs-target="#accept" data-bs-toggle="modal">Ver listado de aspirantes</button>
                  <button class="btn btn-danger d-block w-100 py-2 this border-0" disabled v-if="status === false">Ya has asignado un aspirante</button> -->
                  <button class="btn btn-danger d-block w-100 py-2 this border-0" md-button onclick="modify(dato)">Modificar</button>
                </div>

              </div>
            </div>
            @endforeach

              <!-- <app-card-manager [dato]="dato" md-card (cerrar)="cerrardetail()"></app-card-manager>
              <app-manager-edit [dato]="datoedit" md-card (closed)="cerrarmodify()"></app-manager-edit> -->
              <button class="btn btn-custom" onclick="up()"><i class="bi bi-arrow-up-circle"></i></button>
          </div>
          @else
          <div class="row justify-content-center w-100">
            <img src="{{asset('img/admin.jpeg')}}" alt="" class="nohay">
            <h3 class="text-center nohay">Aún no haz creado algún proyecto ¡Inicia!</h3>
          </div>
        </div>
    </div>
  </div>

  @endif
</body>
</html>
@endsection
