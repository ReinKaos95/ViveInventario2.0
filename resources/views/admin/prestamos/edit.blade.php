<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
 <script src="{{ asset('js/prestamos.js') }}"></script>
  <link href="{{ asset('css/prestamos.css') }}" rel="stylesheet">
<!-- CDN JS  -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Jasny Bootstrap and JS -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/4.0.0/css/jasny-bootstrap.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/4.0.0/js/jasny-bootstrap.min.js"></script>
    <!-- Bootstrap select JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.5/js/i18n/defaults-ua_UA.js"></script>
    <!-- FontAwesome and JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Bootstrap select CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css">
<div class="bg-light p-1 border-bottom shadow">
    <h4 class="w-40 text-center">
        <a href="#" class="text-decoration-none text-black-50">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Vivetv.png/245px-Vivetv.png" class="w-40" alt="Logo" width="40px">
        </a>
    </h4>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="container mt-5 login-block">
        	<div class="row">
        		<div class="col-md-4 login-sec p-4">
        		    <div class="w-100 border-bottom pb-3 mb-3">
        		            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Vivetv.png/245px-Vivetv.png" class="w-75" alt="Logo" style="width: 220px;">
        		    </div>
        		    <form class="login-form needs-validation" novalidate action="{{Route('prestamos.update',$prestamos->id)}}"method="post">
                  {{ csrf_field() }}
                   {{ method_field('PATCH') }}
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-at"></i></span>
                            </div>
                            <input type="texto" class="form-control" placeholder="E-Salida" aria-label="pres_salida" aria-describedby="basic-addon1" required name="pres_salida" value="{{$prestamos->pres_salida}}">
                            <div class="invalid-tooltip">
                               Ingrese la salida
                            </div>
                        </div>
                        <hr>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                            </div>
                            <input type="date" class="form-control" placeholder="fecha de salida" aria-label="pres_fecha_salida" aria-describedby="basic-addon2" required name="pres_fecha_salida" value="{{$prestamos->pres_fecha_salida}}">
                            <div class="invalid-tooltip">
                                Fecha de salida
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                            </div>
                            <input type="date" class="form-control" placeholder="fecha de salida" aria-label="pres_fecha_entrada" aria-describedby="basic-addon2" required name="pres_fecha_entrada" value="{{$prestamos->pres_fecha_entrada}}">
                            <div class="invalid-tooltip">
                                Fecha de entrada
                            </div>
                        </div>
                        <hr>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon4"><i class="fas fa-user-edit"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Estatus" aria-label="pres_estatus" aria-describedby="basic-addon4" required  name="pres_estatus"  value="{{$prestamos->pres_estatus}}">
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
                        <div class="align-middle">
                            <div class="d-inline custom-control custom-checkbox floar-left">
								<button class="btn btn-light btn-sm float-left"><a href="{{url('/home')}}">Volver</a></button>
                            </div>
                            <button type="submit" class="btn btn-outline-success btn-sm float-right">Registrar prestamo</button>
                        </div>
                    </form>
        		</div>

        	</div>
        </div>
	</div>
</div>