@extends('layouts.login')


<link href="{{ asset('css/login.css') }}" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<!------ Include the above in your HEAD tag ---------->

 <!-- login start -->
        

<div class="container register">
<div class="row">
<div class="col-md-3 register-left">
<img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Vivetv.png/245px-Vivetv.png" class="w-75" alt="Logo">
<h3>Bienvenido</h3>
<p>Bienvenido al sistema de inventario</p>
</div>
<div class="col-md-9 register-right">
<div class="tab-content" id="myTabContent">
<div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
<h3 class="register-heading">Login</h3>
<div class="row register-form">
<div class="col-md-12 profile_card">
    <form class="form-horizontal"  method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
    <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
        <i class="fa fa-envelope-o"></i>
         <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
    </div>
    <div class="input-group form-group {{ $errors->has('password') ? ' has-error' : '' }}">
             <i class="fa fa-lock"></i>
       <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
    </div>
    <div class="float-right">
      <input type="submit" class="btn btn-primary" value="Register" />
      </div>
      </form>
</div>
</div>
</div>
</div>
</div>
</div>