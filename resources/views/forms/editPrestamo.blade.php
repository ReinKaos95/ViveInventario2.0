<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editEquipo{{$key->id}}">
  actualizar
</button>

<!-- Modal -->
<div class="modal fade" id="editEquipo{{$key->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <form class="login-form needs-validation" novalidate action="{{Route('prestamos.update',$key->id)}}"method="post">
                  {{ csrf_field() }}
                   {{ method_field('PATCH') }}
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-at"></i></span>
                            </div>
                            <input type="texto" class="form-control" placeholder="E-Salida" aria-label="pres_salida" aria-describedby="basic-addon1" required name="pres_salida" value="{{$key->pres_salida}}">
                            <div class="invalid-tooltip">
                               Ingrese la salida
                            </div>
                        </div>
                        <hr>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                            </div>
                            <input type="date" class="form-control" placeholder="fecha de salida" aria-label="pres_fecha_salida" aria-describedby="basic-addon2" required name="pres_fecha_salida" value="{{$key->pres_fecha_salida}}">
                            <div class="invalid-tooltip">
                                Fecha de salida
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                            </div>
                            <input type="date" class="form-control" placeholder="fecha de salida" aria-label="pres_fecha_entrada" aria-describedby="basic-addon2" required name="pres_fecha_entrada" value="{{$key->pres_fecha_entrada}}">
                            <div class="invalid-tooltip">
                                Fecha de entrada
                            </div>
                        </div>
                        <hr>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon4"><i class="fas fa-user-edit"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Estatus" aria-label="pres_estatus" aria-describedby="basic-addon4" required  name="pres_estatus"  value="{{$key->pres_estatus}}">
                            <div class="invalid-tooltip">
                                Estatus
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon5"><i class="fas fa-user-edit"></i></span>
                            </div>
                                                    <!--label for="role">Departamentos</label-->
                                <select class="form-control form-select " name="usuarios_us_id" >
                            <option value="">Seleccione usuario</option>
                            @foreach($users as $key => $value)
                                <option value="{{$key}}">{{$value}}</option>
                            @endforeach
                        </select>
                            <div class="invalid-tooltip">
                       
                            </div>
                        </div>
                        <hr>
                              <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon5"><i class="fas fa-user-edit"></i></span>
                            </div>
                                                    <!--label for="role">Departamentos</label-->
                        <select class="form-control form-select " name="equipos_eq_id" >
                            <option value="">Seleccione Equipo</option>
                            @foreach($tequid as $key => $value)
                                <option value="{{$key}}">{{$value}}</option>
                            @endforeach
                        </select>
                            <div class="invalid-tooltip">
                       
                            </div>
                        </div>
                        <hr>
                         <div class="modal-footer">
                        <div class="align-middle">
                            <button type="submit" class="btn btn-outline-success btn-sm float-right">Registrar prestamo</button>
                        </div>
                    </form>
                          </div>
    </div>
  </div>
</div>