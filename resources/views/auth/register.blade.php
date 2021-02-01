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
            <h5 class="card-title text-center">Register</h5>
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}"  enctype="multipart/form-data">
                        {{ csrf_field() }}

                           <div class="form-label-group {{ $errors->has('name') ? ' has-error' : '' }}" >
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                <label for="inputUserame">Name</label>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
              </div>

                  <div class="form-label-group {{ $errors->has('surname') ? ' has-error' : '' }}">
                <input id="surname" type="text" class="form-control" name="surname" value="{{ old('surname') }}" required autofocus>
                <label for="inputSurname">Surname</label>

                                @if ($errors->has('surname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                                @endif
              </div>
                                  <div class="form-label-group {{ $errors->has('cedula') ? ' has-error' : '' }}">
                    <input id="cedula" type="text" class="form-control" name="cedula" required>
                        <label for="inputCedula">Cedula</label>
                                                        @if ($errors->has('cedula'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cedula') }}</strong>
                                    </span>
                                @endif
              </div>

                                    <div class="form-label-group {{ $errors->has('user') ? ' has-error' : '' }}">
                    <input id="user" type="text" class="form-control" name="user" required>
                        <label for="inputUser">Usuario</label>
                                                        @if ($errors->has('user'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user') }}</strong>
                                    </span>
                                @endif
              </div>


                    <div class="form-label-group{{ $errors->has('email') ? ' has-error' : '' }}">
                 <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                <label for="inputEmail">Email address</label>
                 @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
              </div>
                <div class="form-label-group {{ $errors->has('photos') ? ' has-error' : '' }}">
                  <input accept="image/*" type="file" name="photos" required>
                                  @if ($errors->has('photos'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('photos') }}</strong>
                                    </span>
                                @endif
                      </div>
                               <div class="form-label-group {{ $errors->has('estatus') ? ' has-error' : '' }}">
                    <input id="estatus" type="text" class="form-control" name="estatus" required>
                        <label for="inputUser">Estatus</label>
                                                        @if ($errors->has('estatus'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('estatus') }}</strong>
                                    </span>
                                @endif
              </div>

                    <div class="form-label-group {{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password" type="password" class="form-control" name="password" required>
                        <label for="inputPassword">Password</label>
                                                        @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
              </div>
                          

    
              <div class="form-label-group">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
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