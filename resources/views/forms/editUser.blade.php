<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editUser{{$key->id}}">
  actualizar
</button>

<!-- Modal -->
<div class="modal fade" id="editUser{{$key->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form class="form-horizontal" method="POST" action="{{Route('users.update',$key->id)}}">
                        {{ csrf_field() }}
                          {{ method_field('PATCH') }}
                           <div class="form-label-group">
                <input id="name" type="text" class="form-control" name="name" value="{{$key->name}}" required autofocus>
                <label for="inputUserame">Name</label>

              </div>

         <div class="form-label-group">
                <input id="surname" type="text" class="form-control" name="surname" value="{{$key->surname}}" required autofocus>
                <label for="inputSurname">Surname</label>

              </div>
                              <div class="form-label-group">
                    <input id="cedula" type="text" class="form-control" name="cedula"  value="{{$key->cedula}}" required>
                        <label for="inputCedula">Cedula</label>

              </div>
                  <div class="form-label-group">
                    <input id="user" type="text" class="form-control" name="user" value="{{$key->user}}" required>
                        <label for="inputUser">Usuario</label>
                      </div>

                    <div class="form-label-group">
                 <input id="email" type="email" class="form-control" name="email" value="{{$key->email}}" required>
                <label for="inputEmail">Email address</label>
         
              </div>
                                            <div class="form-label-group ">
                    <input id="estatus" type="text" class="form-control" name="estatus" value="{{$key->estatus}}" required>
                        <label for="inputUser">Estatus</label>
                      </div>
                                     <div class="form-label-group">
                  <input type="file" name="photos" >
                       
                      </div>
                         <div class="form-label-group ">
                    <input id="password" type="password" class="form-control" name="password" value="{{$key->password}}"required>
                        <label for="inputPassword">Password</label>

              </div>

              <div class="form-label-group">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" value="{{$key->password}}" required>
                <label for="inputConfirmPassword">Confirm password</label>
              </div>
         

                       
      </div>
      <div class="modal-footer">
 <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
      </div>
    </div>
  </div>
</div>