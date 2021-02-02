<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!------ Include the above in your HEAD tag ---------->
 <link href="{{ asset('css/tables.css') }}" rel="stylesheet">
<div class="container">
    <div class="row">
        <div class="col-md-12">
     
  <h1 align="center">Registro de prestamos</h1>
  <div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col md-10">
      <h2 class="text-center mb-5">Prestamos tramitados</h2>
      <table class="table table-bordered table-striped text-center">
 

<table class="table table-borderless">
           <thead class="cf">        <tr>
            <th>Id</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Serial</th>
            <th>Tipo de equipo</th>
            <th>Bien nacional</th>
            <th>Estatus</th>
            <th>Departamento</th>
            <th>Agregado a</th>
            <th>Actualizado a</th>
            <th>Acciones</th>
         </tr>
            </thead>
            <tbody>
        
        @foreach($equixte as $key)
        <tr>

          <td>{{$key->id}}</td>
          <td>{{$key->eq_marca}}</td>
          <td>{{$key->eq_modelo}}</td>
          <td>{{$key->eq_serial}}</td>
          <td>{{$key->teq_nombre}}</td>
          <td>{{$key->eq_nbiennacional}}</td>
          <td>{{$key->eq_estatus}}</td>
          <td>{{$key->dep_nombre}}</td>
          <td>{{$key->created_at}}</td>
          <td>{{$key->updated_at}}</td>
          <td><a href="{{url('/admin/equipment/'.$key->id.'/edit')}}" class="btn btn-primary">Actualizar</a>
               @include('admin.equipment.delete',['equipment'=>$key])
             </td>
        </tr>
        @endforeach
        
       </tbody>
          </table>
     
    </div>
  </div>
     <div class="row">
    <button  class="btn btn-light btn-xs mt-5"><a href="{{url('/home')}}">Volver</a></button>
    <button  class="btn btn-light btn-xs mt-5"><a href="{{url('admin/equipment/create')}}">crear</a></button>
    </div>
      
</div>