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
                <form action="{{Route('admin.equipment.update',$equipment->id)}}" method="post">
                  {{ csrf_field() }}
                   {{ method_field('PATCH') }}
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <input name="eq_modelo" placeholder="Modelo" class="form-control" type="text" required value="{{$equipment->eq_modelo}}">
                        </div>
                        <div class="form-group col-md-6">
                          <input type="text" class="form-control" name="eq_marca" placeholder="Marca" required value="{{$equipment->eq_marca}}">
                        </div>
                      </div>
                            <div class="form-row">
                        <!--label for="role">tipo de equipos</label-->
                       <select class="form-control form-select " name="eq_tequid" >
                            @foreach($tipoEquipo as $key => $value)
                                <option value="{{$key}}">{{$value}}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input name="eq_serial" placeholder="Serial" class="form-control" required type="text" value="{{$equipment->eq_serial}}">
                        </div>
                            <br>
                        <div class="form-row">
                        <!--label for="role">Departamentos</label-->
                        <select class="form-control" name="departamentos_dep_id">
                            @foreach($departamentos as $key => $value)
                                <option value="{{$key}}">{{$value}}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>
                    <br>
                     <div class="form-group col-md-6">
                            <input name="eq_nbiennacional" placeholder="Numero Bien nacional" class="form-control" required type="text" value="{{$equipment->eq_nbiennacional}}">
                        </div>
                        <div class="form-group col-md-12">
                                  <input name="eq_estatus" placeholder="Estado" class="form-control" required type="text" value="{{$equipment->eq_estatus}}">
                        </div>
                    </div>
                 
                    

      <div class="modal-footer">
                       <div class="form-row">
                        <input type="submit" value="registrar" class="btn btn-primary">
                    </div>
                </form>
      </div>
    </div>
  </div>
</div>