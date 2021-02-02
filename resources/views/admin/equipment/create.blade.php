<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<section class="testimonial py-5" id="testimonial">
    <div class="container">
        <div class="row ">
            <div class="col-md-4 py-5 bg-primary text-white text-center ">
                <div class=" ">
                    <div class="card-body">
                        <img src="http://www.ansonika.com/mavia/img/registration_bg.svg" style="width:30%">
                        <h2 class="py-3">Registros de equipos</h2>
                        <p>Tation argumentum et usu, dicit viderer evertitur te has. Eu dictas concludaturque usu, facete detracto patrioque an per, lucilius pertinacia eu vel.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8 py-5 border">
                <h4 class="pb-4">REGISTROS DE EQUIPOS</h4>
                <form action="{{url('/admin/equipment')}}" method="post">
                  {{ csrf_field() }}
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <input type="text" class="form-control" name="eq_marca" placeholder="Marca" required>
                        </div>
                        <div class="form-group col-md-6">
                          <input name="eq_modelo" placeholder="Modelo" class="form-control" type="text" required>
                        </div>
                      </div>
                      <br>
                    <div class="form-row">
                        <!--label for="role">tipo de equipos</label-->
                        <select class="form-control form-select " name="eq_tequid" >
                            <option value="">Seleccione Equipo</option>
                            @foreach($tipoEquipo as $key => $value)
                                <option value="{{$key}}">{{$value}}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input name="eq_serial" placeholder="Serial" class="form-control" required type="text">
                        </div>
                        <div class="form-group col-md-6">
                            <input name="eq_nbiennacional" placeholder="Numero Bien nacional" class="form-control" required type="text">
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <!--label for="role">Departamentos</label-->
                        <select class="form-control" name="departamentos_dep_id">
                            <option value="">Seleccione Departamento</option>
                            @foreach($departamentos as $key => $value)
                                <option value="{{$key}}">{{$value}}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>
                        <div class="form-group col-md-14">
                            <input name="eq_estatus" placeholder="Estado" class="form-control" required type="text">
                        </div>
                        <div class="form-row">
                            <input type="submit" value="Registrar" class="btn btn-primary" style="margin: auto; width: 250px;">
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</section>
