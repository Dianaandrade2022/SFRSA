<div class="card text-start" *ngIf="dato" md-card-content>
  <div class="card-bodyc">
    <div class="card-content">
      <div class="modal-header mb-1">
        <h4 class="card-title">Detalles del postulante</h4>
        <i class="bi bi-x-circle fs-5" (click)="oncerrar()"></i>
      </div>
      <div class="card-text">
          <h5>Nombre del postulante:</h5>
          <p>{{dato.name}}</p>
          <h5>Fecha de la solicitud:</h5>
          <p>{{dato.fecha_solicitud}}</p>
          <h5>Sexo:</h5>
          <p>{{dato.genero}}</p>
          <h5>Correo electrónico:</h5>
          <p>{{dato.correo}}</p>
          <h5>Fecha de nacimiento:</h5>
          <p>{{dato.age}}</p>
          <h5>Nivel académico requerido::</h5>
          <p>{{dato.niveluser}}</p>
          <h5>Telefono:</h5>
          <p>{{dato.telefono}}</p>
          <h5>Universidad:</h5>
          <p>{{dato.universidad}}</p>
        </div>
    </div>
  </div>
</div>
