
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <h1 align="center">Registro de prestamos</h1>
  <div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col md-10">
      <h2 class="text-center mb-5">Prestamos tramitados</h2>
      <table class="table table-bordered table-striped text-center">
 

<table class="table table-borderless">
           <thead class="cf">
        <tr>
        	<th>Usuario</th>
            <th>Equipo</th>
            <th>Codigo salida</th>
            <th>Fecha de salida</th>
            <th>Fecha de entrada</th>
            <th>Estatus</th>
            <th>Agregado a</th>
            <th>Actualizado a</th>
            <th>Acciones</th>
         </tr>
            </thead>
        <tbody>
        
        @foreach($prestamo as $key)
        <tr>
          <td>{{$key->usuarios_us_id}}</td>
          <td>{{$key->equipos_eq_id}}</td>
          <td>{{$key->pres_salida}}</td>
          <td>{{$key->pres_fecha_salida}}</td>
          <td>{{$key->pres_fecha_entrada}}</td>
          <td>{{$key->pres_estatus}}</td>
          <td>{{$key->created_at}}</td>
          <td>{{$key->updated_at}}</td>
          <td><a href="{{url('/admin/prestamos/'.$key->id.'/edit')}}" class="btn btn-primary">Actualizar</a>
               @include('admin.prestamos.delete',['prestamos'=>$key])
             </td>
        </tr>
        @endforeach
        
       </tbody>
</table>
    </div>
  </div>
    <button  class="btn btn-light btn-xs mt-5"><a href="{{url('/home')}}">Volver</a></button>
    <button  class="btn btn-light btn-xs mt-5"><a href="{{url('admin/prestamos/create')}}">crear</a></button>
</div>
