
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#verPrestamo{{$info->id}}">
  Informacion
</button>

<!-- Modal -->
<div class="modal fade" id="verPrestamo{{$info->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Recibo de Prestamos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Codigo de Prestamo: {{$info->pres_salida}}</p>
          <p>Fecha de Salida: {{$info->pres_fecha_salida}}</p>
          <p>Fecha de Entrada{{$info->pres_fecha_entrada}}</p>
          <p>Estado: {{$info->pres_estatus}}</p>
          <a align="center" href="{{ route('invoice.pdf') }}">Imprimir comprobante</a>
          </div>
      </div>
    </div>