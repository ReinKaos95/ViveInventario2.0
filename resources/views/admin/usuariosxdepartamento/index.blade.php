
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <h1 align="center">configuracion</h1>
  <div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col md-10">
      <h2 class="text-center mb-5">Usuarios listados</h2>
      <table class="table table-bordered table-striped text-center">
 
        <tr>
          <th>Cedula</th>
          <th>Departamento</th>
          <th>Creado a </th>
          <th>Actualizado a</th>
          <th>Funciones</th>
        </tr>
        @if($dept)
        @foreach($dept as $key)
        <tr>
          <td>{{$key->usxdp_uscedula}}</td>
          <td>{{$key->dep_nombre}}</td>
          <td>{{$key->created_at}}</td>
          <td>{{$key->updated_at}}</td>
          <td><a href="{{url('/admin/usuariosxdepartamento/'.$key->id.'/edit')}}" class="btn btn-primary">Actualizar</a>
            @include('admin.usuariosxdepartamento.delete',['dept'=>$key])
        </tr>
        @endforeach
        @endif
      </table>
     
    </div>
  </div>
      <a href="{{url('/home')}}" class="btn btn-light btn-xs mt-5">Volver</a>
</div>
