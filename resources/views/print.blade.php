@extends('welcome')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>

        <link rel="stylesheet" href="{{ asset('') }}">
    </head>
    <body class="antialiased">
    <div class="page" *ngIf="dato" >
  <div class="bodyc">
   <div class="content">
     <div class="img-logo">
       <img src="../../../../assets/img/logo.png" alt="Imagen" class="logo">
     </div>
     <div class="h-1">
       <h1>REQUISICIÓN DE PRACTICANTE</h1>
     </div>
     <div class="datos-section-container">
       <div class="datos-section">

         <div class="datos-row py-0">
           <div class="datos-label"><strong>Fecha</strong></div>
           <div class="datos-value">{{dato.fecha}}</div>
         </div>
         <div class="datos-row py-0">
           <div class="datos-label"><strong>Nombre de la empresa</strong></div>
           <div class="datos-value">{{dato.nombre_empresa}}</div>
         </div>
         <div class="datos-row py-0">
           <div class="datos-label"><strong>Nombre del solicitante</strong></div>
           <div class="datos-value">{{dato.asignado_a}}</div>
         </div>
          <div class="datos-row py-0">
            <div class="datos-label"><strong>Departamento solicitante</strong></div>
            <div class="datos-value">{{dato.departamento}}</div>
          </div>

          <div class="datos-row py-0">
            <div class="datos-label"><strong>Nivel academico que requiere</strong></div>
            <div class="datos-value">{{dato.n_academico_requerido}}</div>
          </div>
          <div class="datos-row py-0">
            <div class="datos-label"><strong>Nombre del proyecto</strong></div>
            <div class="datos-value">{{dato.nombre_proyecto}}</div>
          </div>
          <div class="datos-row py-0">
            <div class="datos-label"><strong>Descripción y objetivo del proyecto</strong></div>
            <div class="datos-value">{{dato.descripcion}}</div>
          </div>
          <div class="datos-row py-0">
            <div class="datos-label"><strong>Lugar donde se realizará el proyecto</strong></div>
            <div class="datos-value">{{dato.ubicacion}}</div>
          </div>
          <div class="datos-row py-0">
            <div class="datos-label"><strong>horario a cubrir</strong></div>
            <div class="datos-value">{{dato.fechainicio}} a {{dato.fechafin}}</div>
          </div>


       </div>
     </div>

     <div class="h-2">
       <h2>Funciones especificas a realizar en su estancia</h2>
     </div>

     <div class="editable-section">

       <!-- Aquí se puede ingresar texto antes de imprimir -->
       <textarea rows="5" class="form-control"></textarea>
       <div class="text-editable text-center">
         <br><br><br><p>Nombre y firma del Gerente / Director de área</p>
       </div>
     </div>
     <div class="w-100 my-2">
       <button (click)="printPage()" class="no-print btn btn-primary mx-2">Imprimir</button>
       <button (click)="cerrar()" class="btn btn-dark mx-2">Volver</button>
     </div>
   </div>
  </div>
 </div>


    </body>
</html>
@endsection
