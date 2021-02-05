<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <h1 align="center">configuracion</h1>
  <div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col md-10">
      <h2 class="text-center mb-5">Usuarios listados</h2>
      <table class="table table-bordered table-striped text-center">
 
        <tr>
          <th>Usuario</th>
            <th>Equipo</th>
            <th>Creado a </th>
          <th>Actualizado a</th>
            <th>Acciones</th>
         </tr>
            </thead>
        <tbody>
        
        @foreach($prestamo as $info)
        <tr>
          <td>{{$info->user}}</td>
          <td>{{$info->id}}</td>
          <td>{{$info->created_at}}</td>
          <td>{{$info->updated_at}}</td>
          <td><a href="{{url('/admin/prestamos/'.$info->id.'/edit')}}" class="btn btn-primary">Actualizar</a>
                @include('vistasUsuario.verPrestamo')
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
