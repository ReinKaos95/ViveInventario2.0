
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#verUser{{$key->id}}">
  Informacion
</button>

<!-- Modal -->
<div class="modal fade" id="verUser{{$key->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Data de Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="../images/{{$key->photos}}" width="150" />
           <p>Nombre: {{$key->name}}</p>
         <p>Apellido {{$key->surname}}</p>
         <p>Cedula: {{$key->cedula}}</p>
         <p>Usuario: {{$key->user}}</p>
         <p>Correo: {{$key->email}}</p>
         <p>Estado actual: {{$key->estatus}}</p>
          </div>
      </div>
    </div>