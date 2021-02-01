<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="{{ asset('css/register.css') }}" rel="stylesheet">
 <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
             <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body">
            <h5 class="card-title text-center">Edit user</h5>
                    <form class="form-horizontal" method="POST" action="{{Route('users.update',$users->id)}}">
                        {{ csrf_field() }}
                          {{ method_field('PATCH') }}
                           <div class="form-label-group">
                <input id="name" type="text" class="form-control" name="name" value="{{$users->name}}" required autofocus>
                <label for="inputUserame">Name</label>

              </div>

         <div class="form-label-group">
                <input id="surname" type="text" class="form-control" name="surname" value="{{$users->surname}}" required autofocus>
                <label for="inputSurname">Surname</label>

              </div>
                              <div class="form-label-group">
                    <input id="cedula" type="text" class="form-control" name="cedula"  value="{{$users->cedula}}" required>
                        <label for="inputCedula">Cedula</label>

              </div>
                  <div class="form-label-group">
                    <input id="user" type="text" class="form-control" name="user" value="{{$users->user}}" required>
                        <label for="inputUser">Usuario</label>
                      </div>

                    <div class="form-label-group">
                 <input id="email" type="email" class="form-control" name="email" value="{{$users->email}}" required>
                <label for="inputEmail">Email address</label>
         
              </div>
                                            <div class="form-label-group ">
                    <input id="estatus" type="text" class="form-control" name="estatus" value="{{$users->estatus}}" required>
                        <label for="inputUser">Estatus</label>
                      </div>

                         <div class="form-label-group ">
                    <input id="password" type="password" class="form-control" name="password" value="{{$users->password}}"required>
                        <label for="inputPassword">Password</label>

              </div>

              <div class="form-label-group">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" value="{{$users->password}}" required>
                <label for="inputConfirmPassword">Confirm password</label>
              </div>
         

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
</div>
