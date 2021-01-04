<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
<link href="{{ asset('css/login.css') }}" rel="stylesheet">
<div class="container">
    <div class="card card-login mx-auto text-center bg-dark">
        <div class="card-header mx-auto bg-dark">
            <span> <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Vivetv.png/245px-Vivetv.png" class="w-75" alt="Logo"> </span><br/>
                        <span class="logo_title mt-5"> Login Dashboard </span>


        </div>
        <div class="card-body">
             <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                <div class="input-group form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
 <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                </div>

                <div class="input-group form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                     <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                </div>

                                        <div class="form-group">
                                <button type="submit" class="btn btn-primary  float-right login_btn">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
            </form>
        </div>
    </div>
</div>